<?php

$data = $_POST;

$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];

if (empty($data['name']) || empty($data['phone_number']) || empty($data['email'])) {
    die('Please fill all required fields!');
}
$registered = false;
$handle = @fopen("registerList.txt", "r");
while (!feof($handle)) {
        $buffer = fgets($handle);
    if (strpos($buffer, $phoneNumber) !== false) {
            $registered = true;
}
}
fclose($handle);

if ($registered == true) {
    echo '<script>alert("You are already registered!")</script>';
    header("refresh:0; register.html");
} else {
    $myfile = fopen("registerList.txt", "a");
    $txt = "\n";
    fwrite($myfile, $name);
    fwrite($myfile, $txt);
    fwrite($myfile, $email);
    fwrite($myfile, $txt);
    fwrite($myfile, $phoneNumber);
    fwrite($myfile, $txt);
    fclose($myfile);
    echo '<script>alert("Register Complete")</script>';
    header("refresh:0; home.html");
}
