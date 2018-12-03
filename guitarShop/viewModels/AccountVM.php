<?php

/**
 * @author Group We're Ready and jam
 */
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
