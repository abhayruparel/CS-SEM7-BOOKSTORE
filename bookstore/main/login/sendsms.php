<?php
// Required if your environment does not handle autoloading
session_start();
require __DIR__ . '/vendor/autoload.php';
include("../connect.php");
// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACd2941c8e5a99630e7516e60f1b8750ac';
$token = 'f10a1539679fdcbc52798d5da43fddd1';
$client = new Client($sid, $token);
$codetoSend = rand(100000, 999999);

$sql = "INSERT INTO code (MFA) VALUES ('$codetoSend')";
$insert = mysqli_query($conn, $sql);
$number = '+91'. $_SESSION["number"]; 
// echo $number;

if($insert)
{
    echo 'insert successfully';
}
else{
    echo 'error';
}
// Use the client to do fun stuff like send text messages!
$client->messages->create(
//     // the number you'd like to send the message to
    "$number",
    [
//         // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12183047584',
        // the body of the text message you'd like to send
        'body' => "$codetoSend"
   ]
 );

if($client){
    echo 'mfa code sent';
    header("location: mfa.php");
}
else{
    echo 'something went wrong!!';
}

?>