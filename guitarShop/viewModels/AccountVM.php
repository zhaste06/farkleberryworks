<?php

/**
 * @author Group We're Ready and jam
 */
class AccountVM {

  public $User;
  public $errorMsg;
  public $email;
  public $hashedPassword;
  protected $UserDAM;

  public function __construct() {
    $this->errorMsg = '';
    $this->hashedPassword = '';
    $this->email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $this->UserDAM = new $UserDAM();
    $this->User = isset($this->UserDAM($this->email)) ? isset($this->UserDAM($this->email) : '';


    if (isset($email)) {
      $this->$user = $this->UserDAM->getUser($email);
    }
  }

  public static newUserInstance() {
    $vm = new self();
    $vm->$email = hPOST('email');
    //if block for validation functions for email, phone, zip, and password
    //if (hPOST('phone'))...
    //
    $varArray = array(
      'firstname' => hPOST('firstname'),
      'lastname' => hPOST('lastname'),
      'email' => hPOST('email'),
      'phone' => hPOST('phone'),
      'address' => hPOST('address'),
      'city' => hPOST('city'),
      'state' => hPOST('state'),
      'zip' => intPOST('zip'),
      'country' => hPOST('country'),
      'state' => hPOST('state'),
      'password' => hPOST('password'),
      'admin' => '0' );
    $vm->User = new User($varArray);
    $vm->User->setPassword($varArray['password']);
    $vm->errorMsg = $vm->UserDAM->createUser($vm->User);
    if ($vm->errorMsg === 0) {
      return $vm;
    } else {
      $errorMsg = 'User Creation Failed';
      return $vm;
    }
  }

  //gets password through post paramter
  public static loginInstance() {
    if ( !isset($_SESSION) ) { session_start(); }
    $vm = new self();
    $vm->email = hPOST('email');
    $vm->User = $vm->UserDAM->getUser($email);
    if ($vm->User->verifyUser('password')) {
      $_SESSION['email'] = $vm->email;
      $_SESSION['logged_in']==1;
      $_SESSION['time'] = time();
      return $vm;
    } else {
      $vm->errorMsg = "Email and password mismatch";
      return $vm;
    }
  }

  //works only if user is logged in.
  public static accountInstance() {
      if ( !isset($_SESSION) ) { session_start(); }
      $vm = new self();
      if ($vm->email !== '') {
        return $vm->UserDAM->getUser($vm->email);
      } else {
        return null;
      }
  }


  }
