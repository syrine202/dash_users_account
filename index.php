<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-In</title>
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="\stage\js\script.js"></script>
<link rel="stylesheet" href="\stage\css\signin.css">
<body>
    <div class="grid-container">
        <?php if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div id="message" class="message-box message-<?php echo $_GET['type']; ?>">
                <?php echo $_GET['message']; ?>
            </div>
        <?php endif; ?>
        <div class="form">
            <h2> Sign-In </h2>
            <form method="post" action="authentification.php">
                <div class = "input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class = "input-box">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class = "grid-element-3">
                    <button type="submit" name="submit" >Sign In</button>
                </div>
                <div class="grid-element-4 ">
                    <a href="forgotpassword.php">forgot password ? </a>
                  </div>
                <div class="grid-element-5">
                    <p>Create a new account <a href="signup.php"> here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>