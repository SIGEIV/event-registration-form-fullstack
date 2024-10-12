<?php
// Start session to access submitted data
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Registration Confirmation</h1>
        <table border="1" cellpadding="10">
            <tr>
                <th>Full Name</th>
                <td><?php echo $_SESSION['fullName']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $_SESSION['phone']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $_SESSION['gender']; ?></td>
            </tr>
            <tr>
                <th>Affiliation</th>
                <td><?php echo $_SESSION['affiliation']; ?></td>
            </tr>
            <tr>
                <th>Workshops</th>
                <td><?php echo implode(', ', $_SESSION['workshops']); ?></td>
            </tr>
            <tr>
                <th>Meal Preference</th>
                <td><?php echo $_SESSION['meal']; ?></td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td><?php echo $_SESSION['paymentMethod']; ?></td>
            </tr>
            <tr>
                <th>Uploaded Document</th>
                <td><?php echo ($_SESSION['document'] !== 'No file uploaded') ? "<a href='{$_SESSION['document']}' target='_blank'>View Document</a>" : 'No file uploaded'; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
