<?php

// Replace these values with your actual database connection details
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from the form
        $username = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
        $password = isset($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : ""; // Hash the password

        // Check if the email already exists
        $query = "SELECT * FROM user WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch the user data
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the email already exists
        if ($existingUser) {
            echo "Registration failed. User with email $username already exists.";
            // You can redirect to the registration page with an error message or display it on the same page
        } else {
            // Perform the registration and any additional actions
            // Insert the new user into the database
            $insertQuery = "INSERT INTO user_credentials (username, password) VALUES (:username, :password)";
            $insertStmt = $pdo->prepare($insertQuery);
            $insertStmt->bindParam(':username', $username, PDO::PARAM_STR);
            $insertStmt->bindParam(':password', $password, PDO::PARAM_STR);
            $insertStmt->execute();

            echo "Registration successful. You can now log in with your email $username.";

            // Redirect to the login page after successful registration
            header("Location: login.html");
            exit();
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
