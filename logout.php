<?php
session_start();
if(!isset($_SESSION['f_name'])){
	header("location:login.php");
}

session_unset();

session_destroy();

echo "you have succsessfully logout";

?>