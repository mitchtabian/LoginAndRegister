<?php
require "LoginAndRegister-connection.php";

$user_name = $_POST["identifier_name"];
$user_pass = $_POST["identifier_password"];
$user_email = $_POST["identifier_email"];

//test variables
//$user_name = "Ron";
//$user_pass = "ronspassword";
//$user_email = "ron@tabian.ca";



$query = "INSERT INTO users(name,email,password) VALUES ('$user_name','$user_email','$user_pass')";

if(mysqli_query($conn,$query)){
	//echo "<h2>Data Successfully Inserted!</h2>";
}
else{
	//echo "<h2>Data was unable to be inserted into database :(.</h2>";
}



?>