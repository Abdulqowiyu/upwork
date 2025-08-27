<?php
session_start();
include("connect.php");
if (isset($_POST['user_login'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $result = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $email;
        header("Location: linkedin.html");
        exit();
    } else {
        $error = "Invalid user credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/login.css">
    <link rel="stylesheet" href="fontawesomeb/fontawesome-free-6.3.0-web/css/all.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <a class="linkedin-logo" href="/" aria-label="LinkedIn">
                <img src="asset/image/linkedin.svg">
            </a>
        </div>
        <header>
            <h2>Make the most of your professional life</h2>
        </header>
        <div class="main">
            <div class="lol">
                <span>Email or phone number</span>
                <input type="email" name="email">
            </div>
            <div class="password">
                <span>Password</span>
                <input type="password" name="password">
            </div>
            <div class="new">
                <input type="checkbox">
                <p>Remember me</p>
            </div>
            <div class="link">
                <p>By clicking Agree & Join or Continue, you agree to the LinkedIn<a href="">
                    User Agreement,Privacy Policy,</a>and<a href="">Cookie Policy.</a>
                </p>
            </div>
            <div class="agg">
                <button>Agree & join</button>
            </div>
            <div class="divider">or</div>
            <div class="ac">
                <button class="google"><img src="/asset/image/goggle.svg">Continue with Google</button>
                <button class="end"><img src="/asset/image/miscrosoft.svg">Continue with Apple</button>
            </div>
            <div class="lee">
                <p>Already on LinkedIn?<a href="sign.html"> Sign in</a></p>
            </div>
        </div>
        <div class="help">
           <p>Looking to create a page for a business?<a href="">Get help.</a></p>
        </div>
        <footer>
            <ul>
                <li>Linked <i class="fa-brands fa-linkedin"></i> &copy; 2025</li>
                <li>User Agreement</li>
                <li>Privacy Policy</li>
                <li>Community Guidelines</li>
                <li>Cookie Policy</li>
                <li>Copyright Policy</li>
                <li>Send Feedback</li>
                <li>Language &gt;</li>
            </ul>
        </footer>
    </div>
</body>

</html>