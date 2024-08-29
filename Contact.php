<?php
$servername = "localhost";
$username = "root";
$dbname = "portfolio";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $name = mysqli_real_escape_string($conn, trim($_POST["name"]));
    $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
    $subject = mysqli_real_escape_string($conn, trim($_POST["subject"]));
    $message = mysqli_real_escape_string($conn, trim($_POST["message"]));

    // Prepare SQL statement
    $sql = "INSERT INTO contact (name, email, project, message) VALUES ('$name', '$email', '$subject', '$message')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
