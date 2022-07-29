<?php

session_start();

$connString = "mysql:host=fdb22.awardspace.net; dbname=3383333_finalproject";
$user = "3383333_finalproject";
$pass = "*************";
$pdo = new PDO($connString, $user, $pass);

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usertable where name = :name && password = :password";

$stmt = $pdo->prepare($s);
$stmt->bindValue(':name', $name); 
$stmt->bindValue(':password', $password);
$stmt->execute();

$num = $stmt->rowCount();

if ($num == 1){
	$_SESSION['username'] = $name;
   echo "<script type=\"text/javascript\">". "alert('LOGIN SUCCESSFUL!');" . "window.location.href='index.php';" . "</script>";
}
else{
	echo "<script type=\"text/javascript\">". "alert('LOGIN FAIL! INCORRECT USERNAME OR PASSWORD');" . "window.location.href='index.php';" . "</script>";
}
?>
