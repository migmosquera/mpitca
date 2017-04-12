<?php
include_once "model/user.php";
session_start();
$msjErrorLogin = '';
if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $user = User::loginUser($username,$pass);
    if($user){
	$_SESSION['id']=$user->getId();
	header('location: config_proyecto.php');
    }else{
            $msjErrorLogin = 'Clave o Usuario incorrecto';
            return $msjErrorLogin;
	}
}

