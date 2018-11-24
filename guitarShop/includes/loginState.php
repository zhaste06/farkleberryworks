<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==1 && time() - $_SESSION['time'] < 900){
    //if last request is within 15 minutes
    $_SESSION['time'] = time(); //update session time to current time as Unix timestamp of integer type
}
else {
    session_unset(); //unset all $_SESSION variables
    session_destroy(); //destroy session data
    header("/index.php"); //redirect to home
}