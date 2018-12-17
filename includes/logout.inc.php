<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/5/18
 * Time: 1:04 AM
 */
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header('Location: ../index.php');
exit();