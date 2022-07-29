<?php
session_start();

$connString = "mysql:host=fdb22.awardspace.net; dbname=3383333_finalproject";
$user = "3383333_finalproject";
$pass = "finalProject123";
$pdo = new PDO($connString, $user, $pass);

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usertable where name = ?";

$stmt = $pdo->prepare($s);
$stmt->bindValue(1, $name); 
$stmt->execute();

$num = $stmt->rowCount();
//check if username is already taken
if ($num == 1){
   echo "<script type=\"text/javascript\">" . "alert('Username is TAKEN!');" . "window.location.href='signUpPage.php';" . "</script>";
}
else{
	$reg = "insert into usertable(name, password) values ('$name', '$password')";
	$stmt = $pdo->prepare($reg);
	$stmt->execute();
	echo "<script type=\"text/javascript\">". "alert('SUCCESSFUL!');" . "window.location.href='signUpPage.php';" . "</script>";
}
?>