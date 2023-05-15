<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <style>
        footer{
            position:fixed;
            bottom:0;   
            width:100%;
        }
    </style>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['auth'])){
            header('login.php');
        }
    ?>
    <header class="bg-success">
        <div class="container">
            <div class="K">
            <h1>K Chat</h1>
            </div>
            <div>
                <h1 class="text-center text-white pt-2">Welcome to Chat Room</h1>
            </div>
            <div>
                <a class="text-white" href="login.php"><h1>Log Out</h1></a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="row pt-2" id="messages">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <input type="text" id="message" class="form-control">
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chatroom.js"></script>
</body>
</html>