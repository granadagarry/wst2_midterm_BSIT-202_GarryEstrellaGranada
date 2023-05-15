<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    
    <?php
        session_start();
        if(isset($_SESSION['auth'])){
            header('location:profile.php');
        }
    ?>
    <form id="log_form">
        <div id="signin-status"><h1>K Chats</h1></div>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <p class="error invi">* This field is required</p>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">             <input type="checkbox" name="checkbox-error" id="checkbox-error">
            <p class="error invi">* This field is required</p>
        </div>
            Don't have account? <a href="register.php">Register</a> here
        <div>
            <button type="button">Login</button>
        </div>
    </form>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>