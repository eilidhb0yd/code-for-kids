<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Metadata containing information regarding website -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for kids to learn how to develop websites">
    <meta name="keywords" content="Web Development, Code for Kids, Web Dev for Kids">
    <meta name="author" content="CS113 Group 2 - Eilidh Boyd">
    <title>Level: Hard</title>

    <!-- Link to CSS file and library to access menu icon -->
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>
    <!--Once other pages have been completed, add remaining links here in order-->
    <nav class = "navbar">
        <!-- Icon for mobile navigation -->
        <a href="javascript:void(0);" id="mobileNavIcon">
            <i class="fa-solid fa-bars"></i>
        </a>
        <!-- Desktop navigation bar-->
        <nav class="desktopNavigation">
            <ul class ="navItems">
                <li><a href="index.php">Home</a></li>
                <li>
                    <div class="dropDown">
                        <button class="dropdownButton">Levels</button>
                        <div class="levels-content-dropdown">
                            <a href="beginner-intro.php">Beginner</a>
                            <a href="intermediate-intro.php">Intermediate</a>
                            <a href="hard-intro.html">Hard</a>
                        </div>
                    </div>
                </li>
                <li><a href="progressPage.php">Progress</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
        <?php if (isset($user)): ?>
            <li class="right">Welcome, <?php echo $user; ?></li>
        <?php else: ?>
            <li class="right"><a href="login.html">LogIn</a></li>
        <?php endif; ?>
    </nav>
    <!-- Mobile navigation bar -->
    <nav id = "mobileNavigation">
        <ul class ="navItems">
            <li><a href="index.php">Home</a></li>
            <li>
                <div class="dropDown">
                    <button class="dropdownButton">Levels</button>
                    <div class="levels-content-dropdown">
                        <a href="beginner-intro.php">Beginner</a>
                        <a href="intermediate-intro.php">Intermediate</a>
                        <a href="hard-intro.html">Hard</a>
                    </div>
                </div>
            </li>
            <li><a href="progressPage.php">Progress</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>

    <main>

        <!-- Displays buttons that will take user to respective level page on desktop layout-->
        <h1 class="level-header">Level: Hard</h1>
        <p class ="pick-level-desc">Feeling really brave? Work through the levels below! </p>

        <div class="desktop-level-selectors">
            <div class="level-selectors">
                <form id = "beginner-form">
                    <button onclick="openHard1()" class="level-button" id="hardButton1">Level 1</button>
                    <hr class="horizontal"/>
                    <button onclick="openHard2()" class="level-button" id="hardButton2" disabled>Level 2</button>
                    <hr class="horizontal"/>
                    <button onclick="openHard3()" class="level-button" id="hardButton3" disabled>Level 3</button>
                    <hr class="horizontal"/>
                    <button onclick="openHard4()" class="level-button" id="hardButton4" disabled>Level 4</button>
                    <hr class="horizontal"/>
                    <button onclick="openHardBoss()" class="level-button" id="hardBossButton" disabled>Boss Level</button>
                </form>
            </div>
        </div>

        <!-- Displays buttons that will take user to respective level page on desktop layout-->
        <div class="mobile-level-selectors">
            <div class="level-selectors">
                <button onclick="openHard1()" class="level-button" id="hardButton1-mobile">Level 1</button>
                <button onclick="openHard2()" class="level-button" id="hardButton2-mobile" disabled>Level 2</button>
                <button onclick="openHard3()" class="level-button" id="hardButton3-mobile" disabled>Level 3</button>
                <button onclick="openHard4()" class="level-button" id="hardButton4-mobile" disabled>Level 4</button>
                <button onclick="openHardBoss()" class="level-button" id="hardBossButton-mobile" disabled>Boss Level</button>
            </div>
        </div>
    </main>

<!-- Footer with contact information and link to feedback page -->
    <footer id="footer">
        <p >Contact us: <br>
            Email Address: <a href="mailto:Code.For.Kids@strath.uk">Code.For.Kids@strath.uk</a><br>
            Phone number: 01236 879010 </p>
        <p><a style="color: white" href="news.html">News</a></p>
        <p id="feedback-link">Give us <a href="feedback.html">feedback here!</a></p>
    </footer>

    <!--Link to Javascript file-->
    <script src="script.js"></script>
</body>
</html>