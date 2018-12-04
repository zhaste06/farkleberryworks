<?php

/**
 * @author Group We're Ready and jam
 */
<<<<<<< HEAD
class Account {

  public $user;
  public $email;
  protected $UserDAM;


  public function __construct() {
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $this->$UserDAM = new $UserDAM();

    if (isset($UserDAM)) {
      $user = $UserDAM->getUser($_SESSION['email']);
    }
  }



?>
=======
class AccountVM {

  public $User;
  public $errorMsg;
  public $email;
  protected $UserDAM;

  public function __construct() {
    $this->$user = 'null'
    $this->errorMsg = '';
  }

  public static newUser() {
    $vm = new self()
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





  }

  private $id;
  private $firstname;
  private $lastname;
  private $email;
  private $phone;
  private $address;
  private $city;
  private $zip;
  private $country;
  private $state;
  private $password; //This should be set for the first time with setPassword
  private $admin;

  /**
   * Builds an object with instance variables set. Only the instance variables
   * will be set that correspond to the input data (i.e., not all instance
   * variables will be set in all cases.
   * @param array $data Optional values to be loaded in instance variables.
   */
  function __construct($data = array()) {
      if (!is_array($data)) {
          trigger_error('Non-array input to ' . get_class() . 'constructor');
      } else

      // If the input array has at least one value, set the corresponding
      // instance variable.
      if ($data !== null && $data > 0) {
          foreach ($data as $name => $value) {
              $this->$name = $value;
          }
      }
  }
>>>>>>> a0c529ea13e2c66782101ee90dea2b8ad75c6957
