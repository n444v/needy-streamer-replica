<!-- 
    1. Write the HTML for a single comment
    2. If $message->id is EVEN, create a left-side comment
    3. If $message->id is ODD, create a right-side comment
    4. Echo the PHP data from the DB for that comment
        a. message
        b. username
        c. date & time
-->

<?php
// $msg_sides = $message->id;
// if ($msg_sides % 2 == 0) 

if ($_SESSION['user_id'] === $message->id) {
?>

    <div class="right-container">
        <div class="rtop">
            <p>
                <?= $message->username; ?>
                <img class="akicon" src="./public/images/icons/akicon.jpg" alt="" srcset="">
            </p>
        </div>

        <!-- <div class="right-bottom"> -->
        <!-- <p><?= $message->id; ?><br></p> -->
        <p class="rmsg"><?= $message->msg; ?></p>
        <!-- <p class="rdate"><?= $message->date_created; ?></p> -->
        <!-- </div> -->
    </div>

<?php
} else {
?>
    <!-- <div class="left-even"> -->
    <!-- <p><?= $message->id; ?><br></p> -->
    <div class="left-container">
        <p>
            <img class="ameicon" src="./public/images/icons/ameicon.png" alt="" srcset="">
            <!-- <?= $message->username; ?> -->
            <?= $message->username; ?>
        </p>

        <p class="lmsg"><?= $message->msg; ?></p>
        <!-- <p class="ldate"><?= $message->date_created; ?></p> -->
    </div>

<?php
}
?>