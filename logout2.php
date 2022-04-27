<?php
session_start(); 
session_destroy(); // destroy session
header("location:config2.php"); 
?>