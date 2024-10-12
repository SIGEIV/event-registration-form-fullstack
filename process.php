<?php
// Start session to pass data between pages
session_start();

// Capture form data
$_SESSION['fullName'] = $_POST['fullName'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['affiliation'] = $_POST['affiliation'];
$_SESSION['workshops'] = $_POST['workshops'];
$_SESSION['meal'] = $_POST['meal'];
$_SESSION['paymentMethod'] = $_POST['paymentMethod'];

// If a file was uploaded, store the file information
if (isset($_FILES['document'])) {
    $fileName = $_FILES['document']['name'];
    $fileTmpName = $_FILES['document']['tmp_name'];
    $uploadDir = 'uploads/';
    $filePath = $uploadDir . basename($fileName);

    // Check if upload directory exists, if not, create it
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move the uploaded file to the uploads directory
    move_uploaded_file($fileTmpName, $filePath);
    
    // Store file path in the session
    $_SESSION['document'] = $filePath;
} else {
    $_SESSION['document'] = 'No file uploaded';
}

// Redirect to confirmation page
header('Location: confirmation.php');
exit();
?>
