<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-In</title>
    
    <script src="\stage\js\script.js"></script>
</head>
<link rel="stylesheet" href="\stage\css\signin.css">
<body>
    <div class="grid-container"> 
        <?php if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div id="message" class="message-box message-<?php echo $_GET['type']; ?>">
                <?php echo $_GET['message']; ?>
            </div>
        <?php endif; ?>      
        <div class="form">
            <h2> Sign-Up </h2>
            <form method="post" action="register.php">
                <div class = "input-box">
                    <label for="name">Name:</label>
                    <input type="name" id="name" name="name" required>
                </div>
                <div class = "input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class = "input-box">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class = "grid-element-3">
                    <button type="submit" name="signup">Sign up</button>
                </div>
                <div class="grid-element-5">
                    <p>already have an account ? <a href="index.php"> sign in </a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>