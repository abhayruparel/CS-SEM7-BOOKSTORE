<?php 
//Define cipher 
$cipher = "aes-256-cbc"; 

//Generate a 256-bit encryption key 
// $encryption_key = openssl_random_pseudo_bytes(32); 
$encryption_key = 'QeThWmZq4t7w!z%C*F-JaNdRfUjXn2r5'; 
// echo $encryption_key;
// Generate an initialization vector 
$iv_size = openssl_cipher_iv_length($cipher); 
// $iv = openssl_random_pseudo_bytes($iv_size); 
$iv = 'adb752c7dcff6acb2d78d1273f318f1c'; 

//Data to encrypt 
$data = "Sample Text"; 
echo bin2hex($iv) . '<br>';
$encrypted_data = openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 

echo "Encrypted Text: " . $encrypted_data;

// $newIV = 'adb752c7dcff6acb2d78d1273f318f1c';
//Decrypt data 
$decrypted_data = openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv);

echo "Decrypted Text: " . $decrypted_data; 
?>