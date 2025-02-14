<?php
session_start();

$loggedIn = isset($_SESSION['username']);
$username = $loggedIn ? $_SESSION['username'] : '';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style_index.css">
    <title>Faculty of Science, Benha</title>
</head>
<body>

    <header>
        <a href="#" class="logo">Faculty of Science</a>
        <nav class="navigation">
            <a href="#services">Services</a>
            <a href="#courses">Courses</a>
            <?php if ($loggedIn): ?>
                <div class="user-menu">
                    <span class="username"><?php echo $username; ?></span>
                    <ul class="user-options">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="?logout=true">Logout</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a href="login.html">Login & Signup</a>
            <?php endif; ?>
            <a href="#contact">Contact Us</a>
        </nav>
    </header>


    <section class="main">
        <div>
            <h2>Hello , we are helping <br><span>Content the Faculty</span></h2>
            <h3>welcome to be here</h3>
            <a href="#courses" class="main-btn">View courses</a>
            
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/mohamed-ag7-405431237/"><i class="fab fa-linkedin"></i></a>
                <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="Articles_page.php"><h3>Articles about programming</h3></a>  
                    <p>"Explore insightful programming articles to enhance your coding skills and stay ahead in the tech world!"</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-video"></i>
                </div>
                <div class="info">
                    <h3>Video tips</h3>
                    <p>
                        "Unlock the power of video with our expert tips for creating captivating and shareable content that will elevate your brand and engage your audience!  VideoTips DigitalMarketing"</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3>Curriculum Development</h3>
                    <p>Develop complete curriculums for various technical topics to produce digital transformative courses</p>
                </div>
            </div>
        </div>
    </section>

    <section class="courses" id="courses">
        <h2 class="title"> your courses</h2>
        <div class="content">
            <div class="course-card">
                <div class="course-image">
                    <img src="linear algebra.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>linear algebra course</span>
                        <a href="courses.php" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="algo.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>algorithm course</span>
                        <a href="courses.php" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="ML.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>machine learning course</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="OOP.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>OOP course</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="database.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>DataBase course</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="data structure.jpg" />
                </div>
                <div class="course-info">
                    <p class="course-category">Script Writing & Video Production</p>
                    <strong class="course-title">
                        <span>data structure course</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">contact us</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+20122222222</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3 >Email</h3>
                    <p>student@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>Mohamed AG</span></p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/mohamed-ag7-405431237/"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

</body>
</html>