<?php
$mysqli = new mysqli("localhost", "root", "", "bookstore");

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$name = $_POST['fname'];
$number = $_POST['phone'];
$mail = $_POST['email'];
$int_field = $_POST['courses'];

$sql = "INSERT INTO enquiry_data ( name, mail, contact, interested_field ) 
VALUES ( '$name', '$mail', '$number', '$int_field' )";

if ($mysqli->query($sql) === TRUE) {
        echo '<script type="text/javascript">
                window.onload = function () { alert("Registered Successfully !!"); }
                </script>';
        //echo "<script>alert('Enrolled Successfully !!! \n Your temporary id is: $last_id')</script>";
    } else {
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
} 

// $stmt->close();
$mysqli->close();
?>