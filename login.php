<?php
$host = '127.0.0.1';
$dbname = 'faculty_of_science';
$username = 'root';
$password = '';

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve email and password from the POST request
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        // Query to check user credentials
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch the user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists
        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start a session
                session_start();

                // Set session variables
                $_SESSION['username'] = $user['username'];

                // Set last activity time
                $_SESSION['last_activity'] = time();

                // Redirect to the main page (e.g., index.php)
                header("Location: index.php");
                exit();
            } else {
                // Password is wrong
                echo "Wrong password!<p><a href='login.html'>Back to Login</a></p>";
            }
        } else {
            // User with the provided email does not exist
            echo "User not found. <a href='login.html'>Back to Login</a>";
        }
    } else {
        // Redirect if accessed directly without a POST request
        header("Location: login.html");
        exit();
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
