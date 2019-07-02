<?php

    $db_con = mysqli_connect('localhost','root','','cbt');

    if(!$db_con){
        die("sorry, didnt connect to database");
    }else{
       //echo "You're conected";
    }
?>
