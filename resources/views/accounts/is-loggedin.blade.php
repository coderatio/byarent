<form action="" method="post">
    @csrf
    <div class="row with-forms">
        <div class="col-md-6">
            <h5>First Name</h5>
            <div class="text-input">
                <input type="text" placeholder="Josiah" name="fname" value="{{ auth()->user()->firstName }}">
            </div>
        </div>
        <div class="col-md-6">
            <h5>Last Name</h5>
            <div class="text-input">
                <input type="text" placeholder="Yahaya" name="lname" value="{{ auth()->user()->lastName }}">
            </div>
        </div>
    </div>
    <div class="row with-forms">
        <div class="col-md-12">
            <h5>Email <i class="tip" data-tip-content="Please, enter a valid email as this will be used for all your transactions."></i></h5>
            <input class="search-field" type="email" value="{{ auth()->user()->email }}" name="email" placeholder="e.g me@email.com">
        </div>
    </div>
    <div class="row justify-content-center margin-top-20 margin-bottom-30">
        <div class="col-md-6 text-center">
            <button type="submit" class="button">
                Update My Account
            </button>
        </div>
    </div>
</form>
