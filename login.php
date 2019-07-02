<?php // include "inc/db.php" ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="ass/css/style.css" rel="stylesheet">
        
        <title>::. RIO CBT | Login</title>
    </head>

    <body>

        <header>
            <div class="wrap">
                <a href="index.php"><h1><span>RIO</span> High School</h1></a>
                <nav>
                    <ul>
                        <a href="register.php"><li>Register</li></a> 
                    </ul>
                </nav>
            </div>
        </header>
        
        <section class="log">
            <div class="wrap">
                <div class="log_main">
                    <h1>Login</h1>
                    <form action="acct_confirm.php" method="post">
                        <input type="text" name="reg_no" placeholder="Registration number" required autofocus>
                        <input type="submit" value="SUBMIT" name="ok">
                    </form>
                </div>
            </div>
        </section>

        <footer>
            <span class="high">&copy RIO High Schools - 2017</span>
            <span class="win">Designed by - WintaTech</span>
        </footer>
    
    </body>

</html>
