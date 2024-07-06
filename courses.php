

<?php
session_start();

// Check if the user is logged in
$loggedIn = isset($_SESSION['username']);

// If the user is not logged in, redirect to the login page
if (!$loggedIn) {
    header("Location: login.php"); // Replace with the actual login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_courses.css">
    <script src="https://www.youtube.com/s/desktop/e4d15d2c/jsbin/webcomponents-sd.vflset/webcomponents-sd.js"></script>

    <title>Courses Page</title>
</head>
<body>

    <header>
        <h1>Courses Page</h1>
    </header>

    <main>
        <section class="course">
            <img src="corses_alg.jpg" alt="Linear Algebra">
            <div class="course-info">
                <h2><a href="https://www.youtube.com/watch?v=QVKj3LADCnA&list=PL49CF3715CB9EF31D" >Linear Algebra</a></h2>
                <p>
                    Learn the fundamentals of linear algebra with this comprehensive course. 
                    Topics include vectors, matrices, eigenvalues, and more.
                </p>
            </div>
        </section>

        <section class="course">
            <img src="course_algo.jpg" alt="Algorithm">
            <div class="course-info">
                <h2><a href="https://www.youtube.com/watch?v=2P-yW7LQr08&list=PLUl4u3cNGP6317WaSNfmCvGym2ucw3oGp" >Algorithm Design and Analysis</a></h2>
                <p>
                    Explore the world of algorithms and enhance your problem-solving skills. 
                    This course covers algorithmic design techniques and their applications.
                </p>
            </div>
        </section>

      

    </main>

    <footer>
        <p>&copy; 2023 Courses Page</p>
    </footer>

</body>
</html>