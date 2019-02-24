<form action="{{ route('account.update') }}" method="post" id="editProfileForm">
    <input type="hidden" name="userID" value="{{ $user->id }}">
    @csrf
    <div class="row with-forms">
        <div class="col-md-6">
            <h5>First Name</h5>
            <div class="text-input">
                <input type="text" placeholder="Josiah" minlength="2" name="fname" value="{{ $user->firstName }}">
            </div>
        </div>
        <div class="col-md-6">
            <h5>Last Name</h5>
            <div class="text-input">
                <input type="text" minlength="2" placeholder="Yahaya" name="lname" value="{{ $user->lastName }}">
            </div>
        </div>
    </div>
    <div class="row with-forms">
        <div class="col-md-12">
            <h5>Email Address</h5>
            <input class="search-field form-control disabled" type="email" disabled="disabled" value="{{ $user->email }}" name="email" placeholder="e.g me@email.com">
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
