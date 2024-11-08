<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";  // Default is empty for XAMPP
$dbname = "insurance_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$insuranceType = $_POST['insuranceType'];
$medicalHistory = $_POST['medicalHistory'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO insurance_customers (fullName, email, phone, address, dob, insuranceType, medicalHistory) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $fullName, $email, $phone, $address, $dob, $insuranceType, $medicalHistory);

// Execute the statement
if ($stmt->execute()) {
    echo "Insurance application submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
