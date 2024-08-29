<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Save the data in a file or database
    $file = 'contacts.txt';
    $content = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    file_put_contents($file, $content, FILE_APPEND);

    // Optionally, redirect or show a success message
    echo "Thank you for contacting me!";
}
?>
