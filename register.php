<?php // include "inc/db.php" ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="ass/css/style.css" rel="stylesheet">
        
        <title>::. RIO CBT | Register</title>
    </head>

    <body>

        <header>
            <div class="wrap">
                <a href="index.php"><h1><span>RIO</span> High School</h1></a>
                <nav>
                    <ul>
                        <a href="login.php"><li>Login</li></a> 
                    </ul>
                </nav>
            </div>
        </header>
        
        <section class="reg">
            <div class="wrap">
                <div class="reg_main">
                    <h1>Register</h1>
                    <form action="reg_success.php" method="post">
                        <input type="text" name="name" placeholder="Name" required autofocus>
                        <input type="text" name="reg_no" placeholder="Registration number" required autofocus >
                        <input type="text" name="dept" placeholder="Department" required autofocus >
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