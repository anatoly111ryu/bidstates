<style>
    .error {
        color: red;
    }
</style>
<form class="form-horizontal" method="post" role="form" id="form_edit_user">
    <input type="hidden" name="where" value="customers" />
    <input type="hidden" name="user_id" value="<?= $user->customer_id ?>" />
    <fieldset>
        <div class="form-group required">
            <label class="col-md-12 control-label" style="text-align: center;">Edit a Customer</label>
            <div class="col-md-6" style="display: none;">
                <div class="radio">
                    <label>
                        <input type="radio" name="usertype" id="optionsRadios1" value="customer" checked>Customer
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="usertype" id="optionsRadios2" value="contractor">Contractor
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="usertype" id="optionsRadios3" value="subcontractor">Subcontractor
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group required customer-form">
            <label class="col-md-4 control-label">First Name <sup>*</sup> </label>
            <div class="col-md-6">
                <input name="first-name" placeholder="First Name" class="form-control input-md" required="" type="text" value="<?= $user->first_name ?>">
            </div>
        </div>
        <div class="form-group required customer-form">
            <label class="col-md-4 control-label">Last Name <sup>*</sup> </label>
            <div class="col-md-6">
                <input name="last-name" placeholder="Last Name" class="form-control input-md" required="" type="text" value="<?= $user->last_name ?>">
            </div>
        </div>
        <div class="form-group required contractor-form">
            <label class="col-md-4 control-label">Company Name <sup>*</sup> </label>
            <div class="col-md-6">
                <input name="company-name" placeholder="Company Name" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <div class="form-group required contractor-form">
            <label class="col-md-4 control-label">Customer Name <sup>*</sup> </label>
            <div class="col-md-6">
                <input name="customer-name" placeholder="Customer Name" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <div class="form-group required">
            <label class="col-md-4 control-label">Phone Number <sup>*</sup> </label>
            <div class="col-md-6">
                <input name="phone_number" placeholder="Phone Number" class="form-control input-md" required="" type="tel" value="<?= $user->phone ?>">
                <div class="checkbox">
                    <label>
                        <?php if ($user->hide_phone_number) : ?>
                            <input name="hide_number" type="checkbox" value="1" checked>
                        <?php else: ?>
                            <input name="hide_number" type="checkbox" value="1">
                        <?php endif; ?>
                        <small>Hide the phone number on the published ads (consumers.)</small>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Are you licensed and insured for the practice in your area?</label>
            <div class="col-md-6">
                <?php if ($user->licensed) : ?>
                    <div class="radio">
                        <label for="Gender-0">
                            <input name="licensed" id="Gender-0" value="1" checked="checked" type="radio"> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Gender-1">
                            <input name="licensed" id="Gender-1" value="0" type="radio">
                            No
                        </label>
                    </div>
                <?php else: ?>
                    <div class="radio">
                        <label for="Gender-0">
                            <input name="licensed" id="Gender-0" value="1" type="radio"> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Gender-1">
                            <input name="licensed" id="Gender-1" value="0" checked="checked" type="radio"> No
                        </label>
                    </div>
                <?php endif; ?>

                <small>Verification may be required.</small>
            </div>
        </div>

        <div class="form-group required">
            <label for="inputEmail3" class="col-md-4 control-label">Email <sup>*</sup> </label>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required="" autocomplete="off" value="<?= $user->email?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-md-4 control-lab`el">Password</label>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Leave blank if you don't need to update password">
                <p class="help-block">Please input password to change password.</p>
            </div>
        </div>
        <div class="form-group new-password" id="inputPassword4">
            <label class="col-md-4 control-label">New Password</label>
            <div class="col-md-6">
                <input type="password" name="new_password" class="form-control" placeholder="New Password">
                <p class="help-block">Minimim: 8 characters, capital letter(s) required, Must contain a number</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-block btn-signup">Save</button>
            </div>
        </div>

    </fieldset>
</form>