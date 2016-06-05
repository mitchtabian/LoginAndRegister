<?php
require "LoginAndRegister-connection.php";

$user_email = $_POST["identifier_loginEmail"];
$user_pass = $_POST["identifier_loginPassword"];

//test the login
//$user_email = "ron@tabian.ca";
//$user_pass = "ronspassword";

$mysql_query = "SELECT * FROM users WHERE email = '$user_email'
AND password = '$user_pass'";

$result = mysqli_query($conn,$mysql_query);

//check the result
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	$email = $row["email"];
	
	//Here is the specially formatted string response.. ie: "ServerResponse".
	//It is of the form: "boolean,email,name"
	echo "true,".$email.",".$name;
}
else{
	echo "Login was not successful... :(";
}

?>