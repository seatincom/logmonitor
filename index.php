<?php
define("IS_ROOT",1);
session_start();
require 'PHPTail.php';
require 'config.php';
if(!isset($_SESSION['is_login'])){ 
    header("Location:login.php");
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
