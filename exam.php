<?php // include "inc/db.php" ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="ass/css/style.css" rel="stylesheet">
        
        <title>::. RIO CBT | Exam</title>
    </head>

    <body>

        <header>
            <div class="wrap">
                <a href="index.php"><h1><span>RIO</span> High School</h1></a>
            </div>
        </header>
        
        <section class="qbg">
            <div class="wrap">
                <?php include "inc/question.php" ?>
                <?php include "inc/examsidepane.php" ?>
            </div>
        </section>
    
        <script src="timer.js"></script>

    </body>

</html>