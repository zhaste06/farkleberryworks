<?php 

/**
 * Controller for logins and user self-management.
 *
 * @author Group We're Ready and jam
 */
 class AccountController extends DefaultController {
	 
	 protected $model = null;
	 
	 public function __contruct() {
		 parent::__contruct();
	 }
	 
	 public function login() {
		 Page::$title = 'Login';
		 Page::$username = $_SESSION['user']->username;
		 require(APP_NON_WEB_BASE_DIR . 'views/login.php');
	 }
	 
	 public function myAccount() {
		Page::$title = 'My Account';
		Page::$user = $_SESSION['user']->username;
		require(APP_NON_WEB_BASE_DIR . 'views/myAccount.php');
	 }
	 
	 public function register() {
		 Page::$title = 'Register a new account';
		 require(APP_NON_WEB_BASE_DIR . 'views/register.php');
	 }
 }
?>