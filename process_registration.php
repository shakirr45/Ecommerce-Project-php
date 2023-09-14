<?php
include 'connect.php';

// Retrieve the JSON data sent from the client
$data = json_decode(file_get_contents('php://input'), true);

// Extract data
$fast_name = $data['fast_name'];
$last_name = $data['last_name'];
$user_mail = $data['user_mail'];
$user_phone = $data['user_phone'];
$user_address = $data['user_address'];
$user_pass = $data['user_pass'];

// Insert data into the database
$sql = "INSERT INTO shop_data (fast_name, last_name, user_mail, user_phone, user_address, user_pass, user_type) VALUES ('$fast_name', '$last_name', '$user_mail', '$user_phone', '$user_address', '$user_pass', 'user')";

if ($conn->query($sql) === TRUE) {
    http_response_code(200); // Success response code
    header ('location:login.php');

} else {
    http_response_code(500); // Internal server error response code
}
?>