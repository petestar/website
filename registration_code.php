<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$Email = $Password = $RepeatPassword = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO registration (Email,Password, Repeat Password) VALUES ('$email','$password', '$RepeatPassword')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>