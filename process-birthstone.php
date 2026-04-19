<?php
// SHOW ERRORS
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// DATABASE LOGIN INFO
$servername = "localhost";
$username = "root";
$password = "root";

// GET FORM DATA
$first_name = $_POST['first_name'] ?? "";
$last_name = $_POST['last_name'] ?? "";
$phone = $_POST['phone'] ?? "";
$birthdate = $_POST['birthdate'] ?? "";

// CLEAN UP DATA (remove extra spaces)
$first_name = trim($first_name);
$last_name = trim($last_name);
$phone = trim($phone);
$birthdate = trim($birthdate);

// VALIDATION
// Check if any field is empty

$error = "";

if (
    empty($first_name) ||
    empty($last_name) ||
    empty($phone) ||
    empty($birthdate)
) {
    $error = "All fields are required. Please go back and try again.";

}

// Check phone length (must be 12 characters: 999-999-9999)
elseif (strlen($phone) != 12) {
    $error = "Phone number must be in this format: 999-999-9999";
}

// CONNECT TO MYSQL SERVER
if ($error == "") {
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    $error = "Connection failed.";
} else {

    // Create Database
    $sql = "CREATE DATABASE IF NOT EXISTS JaxonJewelry";
    $conn->query($sql);

    // Select database
    $conn->select_db("JaxonJewelry");

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS participants (
        first_name VARCHAR(50),
        last_name VARCHAR(50),
        phone CHAR(12),
        birthdate DATE
    )";
    $conn->query($sql);

    // Sanitize
    $first_name = $conn->real_escape_string($first_name);
    $last_name = $conn->real_escape_string($last_name);
    $phone = $conn->real_escape_string($phone);
    $birthdate = $conn->real_escape_string($birthdate);

    // Insert Data
    $sql = "INSERT INTO participants (first_name, last_name, phone, birthdate)
            VALUES ('$first_name', '$last_name', '$phone', '$birthdate')";

    if (!$conn->query($sql)) {
        $error = "Could not save data.";
    }

    $conn->close();
 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<main class="form-container">

<?php
// SHOW RESULT

if ($error != "") {
    // show error message
    echo "<h2>Error</h2>";
    echo "<p>$error</p>";
    echo '<a href="birthstone.php">Go Back</a>';
} else {
    // show success message
    echo "<h2>Thank You!</h2>";
    echo "<p>Thank you, " . htmlspecialchars($first_name) . ", for participating!</p>";
    echo '<a href="birthstone.php">Back to Form</a><br>';
    echo '<a href="show-participants.php">Show Participants</a>';
}
?>

</main>

</body>
</html>