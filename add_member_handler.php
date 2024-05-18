<?php

$conn = require_once 'connection.php';

// Get the posted data
if(isset($_POST['submit'])){
    $store_path = 'D:\wamp64\www\connect.php\AuthProject/'.basename($_FILES['img_file']['name']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $image = $_FILES['img_file']['name'];
//$image_tmp = $_FILES['image']['tmp_name'];
}


//$m2_name = $_POST['name2'];
//$m2_email = $_POST['email2'];
//$m2_phone = $_POST['phone2'];
//$image = $_FILES['image']['name'];

// Upload the image
move_uploaded_file($image, $store_path);

// Insert the data into the database
$stmt = $conn->prepare("INSERT INTO members (name, email, phone, image) VALUES (? ? ? ?)");
$stmt->bindParam('ssss', $name, $email, $phone, $image);

$stmt->execute();

// Redirect to the dashboard page
header('Location: dashboard.php');
