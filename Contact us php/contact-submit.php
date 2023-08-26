<?php
include('config.php');
sleep(2);

$name= stripslashes($_POST['name']);    
$name = mysqli_real_escape_string($link, $name);
    
$email= stripslashes($_POST['email']);    
$email = mysqli_real_escape_string($link, $email);

$phone= stripslashes($_POST['phone']);    
$phone = mysqli_real_escape_string($link, $phone);

$message= stripslashes($_POST['message']);    
$message = mysqli_real_escape_string($link, $message);

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
$sql = "INSERT INTO contact(name,email,phone,message) VALUES('".$name."','".$email."','".$phone."','".$message."')";

if ($link->query($sql) === TRUE) {
echo 'Thank you for showing interest'; 
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
else{
	echo "All fields are Mandatory";
}
?>