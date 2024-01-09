<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login Form</h1>
        <?php
        if (isset($_GET['message'])) {
            if($_GET['message'] == "error") {
            echo "<h3>Username and password are incorrect</h3>";        
            }
        }
        ?>
        <div class="form-login">
            <p class="user-login">Login Form</p>
        <form action="login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter your username" required>
            <br><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <br><br>
            <input type="submit" name="login" value="Login" />            
        </form>
</body>
</html>