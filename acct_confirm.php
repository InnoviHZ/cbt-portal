<?php include "inc/db.php" ?>

<?php
    if(!isset($_POST['ok'])){
        die("data not sent");
    }else{
        $reg_no = $_POST['reg_no'];
        //echo "data passed";
    }

    $read = " SELECT * FROM profile WHERE reg_no = '".$reg_no."' ";
    $query = mysqli_query($db_con, $read);
    
    while($row = mysqli_fetch_assoc($query)){
        $name = $row['name'];
        $reg_no = $row['reg_no'];
        $dept = $row['dept'];
    }
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="ass/css/style.css" rel="stylesheet">
        
        <title>::. RIO CBT | Account confirmation</title>
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
        
        <section class="qbg">
            <div class="wrap">

                <div class="question1">
                    
                    <h1>INSTRUCTIONS: </h1>
                    <br>
                    <div class="question1_con">
                    <ul>
                        <li><p>Make sure your details are correct befor you click on the "START EXAM" button</p></li>
                        <br>
                        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa eveniet omnis soluta praesentium, possimus inventore mollitia alias. Non sequi pariatur porro. Nesciunt ut nisi, ducimus quam molestias quidem voluptates?</p></li>
                        <br>
                        <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat, est facere architecto consequatur totam sed cumque eaque impedit numquam. Suscipit dicta aliquid maiores reprehenderit ipsum vel corporis exercitationem fugit!</p></li>
                        <br>
                        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa eveniet omnis soluta praesentium, possimus inventore mollitia alias. Non sequi pariatur porro. Nesciunt ut nisi, ducimus quam molestias quidem voluptates?</p></li>
                        <br>
                        <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat, est facere architecto consequatur totam sed cumque eaque impedit numquam. Suscipit dicta aliquid maiores reprehenderit ipsum vel corporis exercitationem fugit!</p></li>
                        <br>
                        <li><p>Make sure your details are correct befor you click on the "START EXAM" button</p></li>
                        <br>
                        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa eveniet omnis soluta praesentium, possimus inventore mollitia alias. Non sequi pariatur porro. Nesciunt ut nisi, ducimus quam molestias quidem voluptates?</p></li>
                        <br>
                        <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat, est facere architecto consequatur totam sed cumque eaque impedit numquam. Suscipit dicta aliquid maiores reprehenderit ipsum vel corporis exercitationem fugit!</p></li>
                        <br>
                        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa eveniet omnis soluta praesentium, possimus inventore mollitia alias. Non sequi pariatur porro. Nesciunt ut nisi, ducimus quam molestias quidem voluptates?</p></li>
                        <br>
                        <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat, est facere architecto consequatur totam sed cumque eaque impedit numquam. Suscipit dicta aliquid maiores reprehenderit ipsum vel corporis exercitationem fugit!</p></li>
                        <br>
                        
                    </ul>
                    </div>

                </div>
                

                <aside class="asi_conf">
                    <div class="stu_bg">
                        <h1 class="can_info">CANDIDATE INFO</h1>
                        <div style="background:url('img/male2.png') no-repeat ; background-size:cover; height:150px; width:150px; border-radius:50%; margin:0 auto;"></div>
                        <table class="stu_info">
                            <tr class="fair">
                                <td class="t_label">NAME</td>
                                <td><?php echo "$name" ?></td>
                            </tr>
                            <tr class="fair">
                                <td class="t_label">REG NO</td>
                                <td><?php echo "$reg_no" ?></td>
                            </tr>
                            <tr class="fair">
                                <td class="t_label">DEPT</td>
                                <td><?php echo "$dept" ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <a href="exam.php"><button>START EXAM</button></a>
                </aside>

            </div>
        </section>

        <footer>
            <span class="high">&copy RIO High Schools - 2017</span>
            <span class="win">Designed by - WintaTech</span>
        </footer>
    
    </body>

</html>