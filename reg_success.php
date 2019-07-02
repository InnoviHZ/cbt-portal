<?php  include "inc/db.php"; ?>
<?php

    if(!isset($_POST['ok'])){
        die("sorry, couldn't send your data to the database");
    }else{
       // echo "data passed";
    }

    $name = $_POST['name'];
    $reg_no = $_POST['reg_no'];
    $dept = $_POST['dept'];

    $insert = "INSERT INTO profile (name,reg_no,dept) VALUES('$name','$reg_no','$dept')";
    $query = mysqli_query($db_con, $insert);
    if(!$query){
        die("Sorry, query didn't work");
    }else{
        //echo "query works";
    }

    //print_r ($_POST);
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="ass/css/style.css" rel="stylesheet">
        
        <title>::. RIO CBT | Registration message</title>
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
                    <h1>Registration successful !</h1>
                    <div style="background:url('img/male1.png'); background-size:cover; height:100px; width:100px; border-radius:50%; margin:0 auto;"></div>
                    <table>
                        <tr class="fair">
                            <td class="t_label">NAME</td>
                            <td><?php echo "$name" ?></td>
                        </tr>
                        <tr class="dark">
                            <td class="t_label">REG NO</td>
                            <td><?php echo "$reg_no" ?></td>
                        </tr>
                        <tr class="fair">
                            <td class="t_label">DEPT</td>
                            <td><?php echo "$dept" ?></td>
                        </tr>
                    </table>

                    <a href="login.php" class="pro_log">PROCCED TO LOGIN</a>
                </div>
            </div>
        </section>

        <footer>
            <span class="high">&copy RIO High Schools - 2017</span>
            <span class="win">Designed by - WintaTech</span>
        </footer>
    
    </body>

</html>