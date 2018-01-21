<?php
session_start();
require 'PHPTail.php';
require 'config.php';
if(!isset($_SESSION['is_login'])){ 
    $valid_users = array_keys($_authencation);
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    $validated = (in_array($user, $valid_users)) && ($pass == $_authencation[$user]);
    if($validated){
        $_SESSION['is_login']=1;
        unset($_SERVER['PHP_AUTH_PW']);
    }else{
      header('WWW-Authenticate: Basic realm="Please login to use this function"');
      header('HTTP/1.0 401 Unauthorized');
      die ("Not authorized");
    }
} 
$tail = new PHPTail($_configs);

/**
 * We're getting an AJAX call
 */
if(isset($_GET['ajax']))  {
    echo $tail->getNewLines($_GET['file'], $_GET['lastsize'], $_GET['grep'], $_GET['invert']);
    die();
}

/**
 * Regular GET/POST call, print out the GUI
 */
$tail->generateGUI();
