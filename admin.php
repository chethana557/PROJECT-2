<html>
    <head></head>
    <body>
        <?php
        session_start();
        if($_SESSION['level'] ==""){
            header("Location: index.php?message=error");
        }
        ?>
        <div class="container">
            <p>Hello <b>
            <?php
            echo $_SESSION['username'];?></b>
            </p>
            <p>You are logged in as <b><?php echo $_SESSION['level'] ?></b>.</p>
            <a href="logout.php">LOG OUT</a>            
    </form>
    </body>
    </html>  