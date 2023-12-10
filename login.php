<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real-world scenario, you should perform proper validation and authentication.
    // For simplicity, let's assume a valid username and password for demonstration purposes.
    $validUsername = "akshara"; // Replace with the actual username
    $validPassword = "ammu"; // Replace with the actual password

    // Check if the submitted credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Redirect to a success page or perform any other actions needed after successful login
        header("Location: hotel.html");
        exit();
    } else {
        // Display an error message for invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}
?>
