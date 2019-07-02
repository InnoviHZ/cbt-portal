<!-- <div class="question">
                    
    <h1>Question: <span>1</span></h1>

    <div class="main_q">
        <section>
            <p>Obi is 15 years old now and his sister 10 years old.Obi was very curious to know his Parent's age so he asked his father and his father replied "11 years ago I was <b>X</b> years old after 22 years I will be twice the sum of your age and your sister's age 6 years from now ". Obi went to his Mum and asked her age she replied "My age is very simple, just solve the math your father gave you and subtract 5 from it".</p>
            <br>
            <p>What is his father and mother's age repectively? Please help Obi.</p>
            
        </section>

    </div>

    <div class="option">
        <span>A</span>
        <p>49 and 44 Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium laboriosam aliquid distinctio adipisci repellendus sunt inventore quia repellat quasi commodi ullam consequuntur, ipsa rerum? Minus repudiandae optio quibusdam voluptate voluptas!x</p>
    </div>
    <div class="option">
        <span>B</span>
        <p>74 and 69</p>
    </div>
    <div class="option">
        <span>C</span>
        <p>35 and 30</p>
    </div>
    <div class="option">
        <span>D</span>
        <p>59 and 54</p>
    </div>

</div> -->

<?php include "db.php" ?>

<?php
    $read = " SELECT * FROM questions WHERE q_id = 1 "  ;
    $query = mysqli_query($db_con, $read);

    while($row = mysqli_fetch_assoc($query)){
        $qno = $row['q_id'];
        $question = $row['question'];
        $opta = $row['a'];
        $optb = $row['b'];
        $optc = $row['c'];
        $optd = $row['d'];
        $ans = $row['ans'];
    }
?>   

<div class="question">
    
    <h1>Question: <span><?php echo $qno; ?></span></h1>

    <div class="main_q">
        <section>
            <p><?php echo $question; ?></p>       
        </section>
    </div>

    <div class="option">
        <span>A</span>
        <p><?php echo $opta; ?></p>
    </div>
    <div class="option">
        <span>B</span>
        <p><?php echo $optb; ?></p>
    </div>
    <div class="option">
        <span>C</span>
        <p><?php echo $optc; ?></p>
    </div>
    <div class="option">
        <span>D</span>
        <p><?php echo $optd; ?></p>
    </div>

</div>