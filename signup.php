<?php

$data = $_POST;

$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];

if (empty($data['name']) ||
    empty($data['phone_number']) ||
    empty($data['email'])) {
    die('Please fill all required fields!');
}

$myfile = fopen("registerList.txt","w");
$txt = "\n";
fwrite($myfile, $name);
fwrite($myfile, $txt);
fwrite($myfile, $email);
fwrite($myfile, $txt);
fwrite($myfile, $phoneNumber);
fwrite($myfile, $txt);
fclose($myfile);

echo '<script>alert("Register Complete")</script>';
header( "refresh:0; home.html" );

  