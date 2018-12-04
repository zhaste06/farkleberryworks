<?php require('views/farkleberryHeader.php');
require('includes/LoginState.php');

isLoggedInSecured();

$userDAM = new UserDAM();
//$user = $userDAM->getUser($_SESSION['email']);
$user = $userDAM->getUser('test@test.com');
?>
<!-- Content
============================================= -->
<div id="container">
    <div class="container">

        <!-- Breadcrumb
        ============================================= -->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="my-account.html">My Account</a></li>
        </ul><!-- Breadcrumb End-->

        <div class="row">
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h1 class="title">My Account</h1>
                <p class="lead">Hello, <strong><?php echo $user->__get('firstname').' '.$user->__get('lastname')?></strong> - To update your account information.</p>
                <form>
                    <label>First Name: </label><?php echo $user->__get('firstname')?><br/>
                    <label>Last Name: </label><?php echo $user->__get('lastname');?><br/>
                    <label>E-mail: </label><?php echo $user->__get('email');?><br/>
                    <label>Phone: </label><?php echo $user->__get('phone');?><br/>
                    <label>Address: </label><?php echo $user->__get('address');?><br/>
                    <label>City: </label><?php echo $user->__get('city');?><br/>
                    <label>State: </label><?php echo $user->__get('state');?><br/>
                    <label>Zip: </label><?php echo $user->__get('zip');?><br/>
                    <label>Country: </label><?php echo $user->__get('country');?><br/>
                </form>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="personal-details">
                                <legend>Personal Details</legend>
                                <div class="form-group required">
                                    <label for="input-firstname" class="control-label">First Name</label>
                                    <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="<?php echo $user->__get('firstname')?>" name="firstname">
                                </div>
                                <div class="form-group required">
                                    <label for="input-lastname" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="<?php echo $user->__get('lastname');?>" name="lastname">
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="control-label">E-Mail</label>
                                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="<?php echo $user->__get('email');?>" name="email">
                                </div>
                                <div class="form-group required">
                                    <label for="input-telephone" class="control-label">Telephone</label>
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="<?php echo $user->__get('phone');?>" name="telephone">
                                </div>
                            </fieldset><br>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend>Change Password</legend>
                                <div class="form-group required">
                                    <label for="input-password" class="control-label">Old Password</label>
                                    <input type="password" class="form-control" id="input-password" placeholder="Old Password" value="" name="old-password">
                                </div>
                                <div class="form-group required">
                                    <label for="input-password" class="control-label">New Password</label>
                                    <input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
                                </div>
                                <div class="form-group required">
                                    <label for="input-confirm" class="control-label">New Password Confirm</label>
                                    <input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="address">
                                <legend>Payment Address</legend>
                                <div class="form-group">
                                    <label for="input-company" class="control-label">Company</label>

                                    <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">

                                </div>
                                <div class="form-group required">
                                    <label for="input-address-1" class="control-label">Address 1</label>
                                    <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="<?php echo $user->__get('address')?>" name="address_1">
                                </div>
                                <div class="form-group required">
                                    <label for="input-city" class="control-label">City</label>
                                    <input type="text" class="form-control" id="input-city" placeholder="City" value="<?php echo $user->__get('city')?>" name="city">
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="control-label">Post Code</label>
                                    <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="<?php echo $user->__get('zip')?>" name="postcode">
                                </div>
                                <div class="form-group required">
                                    <label for="input-country" class="control-label">Country</label>
                                    <input type="text" class="form-control" id="input-country" placeholder="Country" name="country_id" value="<?php echo $user->__get('country')?>">
                                </div>

                                <div class="form-group required">
                                    <label for="input-zone" class="control-label">Region / State</label>
                                    <input type="text" class="form-control" id="input-country" placeholder="Country" name="country_id" value="<?php echo $user->__get('state')?>">
                                </div>
                            </fieldset>
                        </div>
                    <div class="buttons">
                        <div class="pull-right">
                            <input type="submit" class="btn btn-lg btn-primary" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End -->
            <!--Right Part Start -->
            <aside id="column-right" class="col-sm-3 hidden-xs">
                <h3 class="subtitle"><span>Account</span></h3>
                <div class="list-group">
                    <ul class="list-item">
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Forgotten Password</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Address Books</a></li>
                        <li><a href="wishlist.html">Wish List</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Reward Points</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Recurring payments</a></li>
                    </ul>
                </div>
            </aside>
            <!--Right Part End -->
        </div>
    </div>
</div><!--Content End-->

<?php require('views/farkleberryFooter.php'); ?>