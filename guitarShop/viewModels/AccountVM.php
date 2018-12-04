<?php

/**
 * @author Group We're Ready and jam
 */
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
