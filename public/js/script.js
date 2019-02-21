$(document).ready(function () {
    // Add items to cart

    let addTrigger = $('.add-to-cart');

    addTrigger.click(function (e) {
        e.preventDefault();

        let itemID = this.id;

        let _token = $('meta[name="csrf-token"]').attr('content');

        $.post('/temporary-carts/store', {
            itemID: itemID,
            _token: _token
        }, (data) => {
            let cartCounter = $('#cart-counter');

            if (data.items.length > 0) {
                cartCounter.removeClass('hidden').html(data.items.length)

                $('#card-dropdown-holder').html(data.contents)
            }

        }).fail((error) => {
            console.log(error)
        });
    });


    $('.prevented-link').click((e) => {
        e.preventDefault();
    });

});
