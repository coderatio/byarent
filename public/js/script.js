const csrf_token = $('meta[name="csrf-token"]').attr('content');
let dropdownCartCounter = $('.cart-counter#cart-dropdown-counter');
let cartItemsDropdownHolder = $('.uk-dropdown-grid#cart-dropdown-holder');
let checkoutCartSummaryHolder = $('#checkoutCartSummaryHolder');

$(document).ready(function () {
    // Sticky header
    let headerOffset = $("#header-container").height() * 2;
    $(window).scroll(function() {
        if ($(window).scrollTop() >= headerOffset) {
            $("#header.byarent-header").addClass('cloned sticky').removeClass("unsticky");
            $("#navigation.style-2.byarent-header").addClass('cloned sticky').removeClass("unsticky");
        } else {
            $("#header.byarent-header").addClass('unsticky').removeClass("cloned sticky");
            $("#navigation.style-2.byarent-header").addClass('unsticky').removeClass("cloned sticky");
        }
    });

    // Add items to cart
    initiateAddItemToCart();
});

// Add an item to cart
function initiateAddItemToCart() {
    let addTrigger = $('.add-to-cart');

    addTrigger.click(function (e) {
        e.preventDefault();

        let itemID = this.id;

        blockUI('Adding item to cart');

        $.post('/carts/store', {
            itemID: itemID,
            _token: csrf_token
        }, (data) => {
            unblockUI();

            if (data.items.count > 0) {
                dropdownCartCounter.removeClass('hidden').html(data.items.count);

                cartItemsDropdownHolder.html(data.contents);

                swalSuccess({
                    text: "The item was added to cart successfully!",
                    confirmButtonText: 'Checkout',
                    cancelButtonText: 'Continue shopping',
                    callback: function () {
                        window.location.href = '/checkout';
                    }
                });

                initiateCartDropdownItemRemoval();
                initiateCartClearing();
            }

        }).fail((error) => {
            unblockUI();
            console.log(error)
        });
    });


    $('.prevented-link').click((e) => {
        e.preventDefault();
    });
}

// Remove a single item from shopping cart
// In both dropdown cart table and cart page table
initiateCartDropdownItemRemoval();

function initiateCartDropdownItemRemoval() {
    let cartItemRemoveTrigger = $('.cart-dropdown-remove-item');

    cartItemRemoveTrigger.click(function (e) {
        e.preventDefault();

        let itemID = this.id;

        swal({
            title: "Remove item",
            text: "Are you sure you want to remove this item?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, remove!",
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        }, function (yes) {
            if (yes) {
                $.post(`/carts/remove`, { itemID: itemID, _token: csrf_token }, (data) => {

                    if (data.deleted && data.items.count > 0) {
                        dropdownCartCounter.removeClass('hidden').html(data.items.count);
                        cartItemsDropdownHolder.html(data.newContents);
                        checkoutCartSummaryHolder.html(data.checkoutSummary);
                        swal('Success', 'Item removed from cart successfully!', 'success');
                    } else if(data.deleted && data.items.count == 0) {
                        dropdownCartCounter.addClass('hidden');
                        cartItemsDropdownHolder.html(data.newContents);
                        checkoutCartSummaryHolder.html(data.checkoutSummary);
                        swal('Success', 'Item removed from cart successfully!', 'success');
                    }

                    if (!data.deleted) {
                        swal('Error', data.error, 'error');
                    }

                    initiateAutoUpdateItemsInCart();
                    initiateUpdateItemsInsideCart();
                    initiateCartDropdownItemRemoval();
                    initiateCartClearing();

                }).fail((error) => {
                    swal('Error', 'Something went wrong!', 'error');
                    console.log(error)
                });
            }
        });
    });
}

// Remove all items in shopping cart
initiateCartClearing();

function initiateCartClearing() {
    $('.cart-dropdown-clear').click(function (e) {
        e.preventDefault();

        swal({
            title: "Clear Cart",
            text: "Are you sure you want to clear your cart?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, clear!",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function (yes) {
            $.post('/carts/clear', { _token: csrf_token }, (data) => {
                cartItemsDropdownHolder.html(`
                    <div class="">
                        <div class="pr-2 pl-4 pb-2">
                            <i class="sl sl-icon-basket"></i> Your cart is empty!
                        </div>
                    </div>
                `);
                dropdownCartCounter.addClass('hidden').html(0);
                checkoutCartSummaryHolder.html(data.checkoutSummary);

                swal('Success', 'Cart cleared successfully!', 'success');
                initiateAutoUpdateItemsInCart();

            }).fail((error) => {
                console.log(error);
                swal('Error', 'Something went wrong in the server!', 'error')
            });
        });
    });
}

// Update items inside cart
initiateUpdateItemsInsideCart();

function initiateUpdateItemsInsideCart() {
    let updateBtn = $('#update-inside-cart');
    let cartItemsHolder = $('#items-inside-cart-holder');
    let dropdownCartCounter = $('.cart-counter#cart-dropdown-counter');
    let cartItemsDropdownHolder = $('.uk-dropdown-grid#cart-dropdown-holder');

    updateBtn.click(function (e) {
        e.preventDefault();

        blockUI('Updating cart');

        let itemsForm = $('#inside-cart-form').serializeArray();

        $.post('/carts/update', itemsForm, (data) => {
            unblockUI();

            cartItemsHolder.html(data.contents);

            if (data.items.count > 0) {
                dropdownCartCounter.removeClass('hidden').html(data.items.count);
            } else {
                dropdownCartCounter.addClass('hidden').html(0);
            }

            checkoutCartSummaryHolder.html(data.checkoutSummary);
            cartItemsDropdownHolder.html(data.dropdownContents);

            initiateUpdateItemsInsideCart();
            initiateCartDropdownItemRemoval();
            initiateCartClearing();

        }).fail((error) => {
            unblockUI();
            console.log(error);
        });
    })
}

//Auto update items in cart.
function initiateAutoUpdateItemsInCart() {
    $.post('/items-in-cart/update', { _token: csrf_token }, (data) => {
        let itemsInCartHolder = $('#items-inside-cart-holder');
        itemsInCartHolder.html(data.contents);
        checkoutCartSummaryHolder.html(data.checkoutSummary);

        initiateUpdateItemsInsideCart();
        initiateCartDropdownItemRemoval();
    }).fail((error) => {
        console.log(error);
    });
}

function swalSuccess(options) {
    swal({
            title: options.title ? options : "Success",
            text: options.text,
            type: "success",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: options.confirmButtonText,
            cancelButtonText: options.cancelButtonText,
            closeOnConfirm: false
        },
        options.callback
    );
}

function blockUI(message = 'Please wait') {
    $.blockUI({message: `<i class="fa fa-spinner fa-spin"></i> ${message}`});
}

function unblockUI() {
    $.unblockUI();
}

function blockElement(element, message = 'Please wait') {
    $(element).blockUI({message: `<i class="fa fa-spinner fa-spin"></i> ${message}`});
}

function unblockElement(element) {
    $(element).unblock();
}
