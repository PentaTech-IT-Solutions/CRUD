<?php

$dbHost = 'localhost';
$dbName = 'test';
$dbUser = 'root';
$dbPassword = '';

$dbCon = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
if(!$dbCon){
    echo 'Connection failed';
} else{
    echo 'Connected successfully';
}

// Get the posted data
$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];
$image = $_FILES['image']['name'];
$tempImage = $_FILES['image']['tmp_name'];
$folder = 'D:\wamp64\www\connect.php\AuthProject\images//'.basename($image);

// Insert the data into the database
$query = "INSERT INTO $dbName.members (name, email, phone, occupation, image) VALUES(?, ?, ?, ?, ?)";
$stmt = $dbCon->prepare($query);
$stmt->bind_param('ssiss', $userName, $email, $phone, $occupation, $image);

$stmt->execute();

// Uploading image into the image folder
//move_uploaded_file($image, $folder);

if(move_uploaded_file($tempImage, $folder)){
    echo "<h3>Image uploaded successfully.</h3>";
} else {
    echo "<h3>Failed to upload image!</h3>";
    exit;
}


// Redirect to the dashboard page
header('Location: dashboard.php');
