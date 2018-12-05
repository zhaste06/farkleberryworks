<?php require('views/farkleberryHeader.php');
require(APP_NON_WEB_BASE_DIR.'includes/LoginState.php');

isLoggedInSecured();

$userDAM = new UserDAM();
$user = $userDAM->getUser('test@test.com');

?>
<!-- Content
============================================= -->
<div id="container">
    <div class="container">

        <!-- Breadcrumb
        ============================================= -->
        <ul class="breadcrumb">
            <li><a href="?ctlr=home"><i class="fa fa-home"></i></a></li>
            <li><a href="?ctlr=account&action=myAccount">My Account</a></li>
        </ul><!-- Breadcrumb End-->

        <div class="row">
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h1 class="title">My Account</h1>
                <p class="lead">Hello, <strong><?php echo $user->__get('firstname').' '.$user->__get('lastname');?></strong></p>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="personal-details">
                                <legend>Personal Details</legend>
                                <div class="form-group required">
                                    <label for="input-firstname" class="control-label">First Name: <?php echo $user->__get('firstname')?></label>
                                </div>
                                <div class="form-group required">
                                    <label for="input-lastname" class="control-label">Last Name: <?php echo $user->__get('lastname');?></label>
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="control-label">E-Mail: <?php echo $user->__get('email');?></label></div>
                                <div class="form-group required">
                                    <label for="input-telephone" class="control-label">Telephone: <?php echo $user->__get('phone');?></label>
                                </div>
                            </fieldset><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset id="address">
                                <legend>Payment Address</legend>
                                <div class="form-group required">
                                    <label for="input-address-1" class="control-label">Address: <?php echo $user->__get('address')?></label>
                                </div>
                                <div class="form-group required">
                                    <label for="input-city" class="control-label">City: <?php echo $user->__get('city')?></label>
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="control-label">Post Code: <?php echo $user->__get('zip')?></label>
                                </div>
                                <div class="form-group required">
                                    <label for="input-country" class="control-label">Country: <?php echo $user->__get('country')?></label>
                                </div>

                                <div class="form-group required">
                                    <label for="input-zone" class="control-label">Region / State: <?php echo $user->__get('state')?></label>
                                </div>
                            </fieldset>
                        </div>
                </form>
            </div>
            <!--Middle Part End -->
            <!--Right Part Start -->
            <!--<aside id="column-right" class="col-sm-3 hidden-xs">
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
            </aside>-->
            <!--Right Part End -->
        </div>
    </div>
</div><!--Content End-->

<?php require('views/farkleberryFooter.php'); ?>