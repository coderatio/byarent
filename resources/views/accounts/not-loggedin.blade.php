<form action="" method="post">
    @csrf
    <div class="row with-forms">
        <div class="col-md-6">
            <h5>First Name</h5>
            <div class="text-input">
                <input type="text" placeholder="Josiah" name="fname">
            </div>
        </div>
        <div class="col-md-6">
            <h5>Last Name</h5>
            <div class="text-input">
                <input type="text" placeholder="Yahaya" name="lname">
            </div>
        </div>
    </div>
    <div class="row with-forms">
        <div class="col-md-12">
            <h5>Email <i class="tip" data-tip-content="Please, enter a valid email as this will be used for all your transactions."></i></h5>
            <input class="search-field" type="email" value="" name="email" placeholder="e.g me@email.com">
        </div>

        <div class="col-md-6">
            <h5>Password <i class="tip" data-tip-content="Your password must be atleast 6 characters."></i></h5>
            <input class="search-field" type="password" v-model="password" value="" name="password" placeholder="6 characters password">
        </div>
        <div class="col-md-6">
            <h5>Confirm Password <i class="tip" data-tip-content="Enter the same password as entered on the password field."></i></h5>
            <input class="search-field" type="password" value="" name="confirm-password" v-model="confirmPassword" v-on:input="checkPasswordMatch()" placeholder="Enter password again">
            <span class="help-block text-danger" v-show="!isPasswordSame">Enter same password please.</span>
        </div>
    </div>
    <div class="row justify-content-center margin-top-20 margin-bottom-30">
        <div class="col-md-6 text-center">
            <button type="submit" class="button">
                Create My Account
            </button>
        </div>
    </div>
</form>
