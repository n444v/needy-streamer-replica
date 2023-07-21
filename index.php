<!-- 


    // CacaoTalk PseudoCode
;

/* 
    1. Create a form action="insertMsg.php" method="POST"
        2. Create 2 inputs
            a. username
            b. message
        3. Create a Submit button

    4. Create a div container to hold all the messages
        5. Connect to the DB
        6. SELECT all the messages from the table
        7. fetch WHILE looping
            8. insert messageView.php
*/ -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div id="container">

        <?php include "otherStyling.php";
        include "db_connect.php";
        // $sql = "SELECT * FROM messages";
        // $response = $db->query($sql);
        include "show_more.php"; ?>

        <div id="chat-wrapper">

            <div class="header">
                <div class="square"></div>
                <p>CHATS</p>
                <a href="index.php?limit=<?= $limit ?>">show more</a>
                <!-- SVGS -->

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M24 432c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M432 48H208c-17.7 0-32 14.3-32 32V96H128V80c0-44.2 35.8-80 80-80H432c44.2 0 80 35.8 80 80V304c0 44.2-35.8 80-80 80H416V336h16c17.7 0 32-14.3 32-32V80c0-17.7-14.3-32-32-32zM48 448c0 8.8 7.2 16 16 16H320c8.8 0 16-7.2 16-16V256H48V448zM64 128H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192c0-35.3 28.7-64 64-64z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <a xlink:href="logout.php">Logout
                        <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm175 79c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                    </a>
                </svg>
            </div>


            <div class="chat-box">

                <?php

                // include "db_connect.php";
                // $sql = "SELECT * FROM messages";
                // $response = $db->query($sql);
                // include "show_more.php";

                // $message = $req->fetchAll(PDO::FETCH_OBJ);

                while ($message = $req->fetch()) {
                    // echo "hello";
                    include "messageView.php";
                }

                // foreach ($messages as $message) {
                //     include "messageView.php";
                // }

                ?>


            </div>


            <form action="insertMsg.php" method="POST">
                <p>
                    <label for="username"></label>
                    <!-- <input type="text" name="username" id="username" placeholder="username"> -->
                    <input type="text" name="username" id="username" readonly value=<?= $_SESSION['username'] ?>>
                </p>
                <p>
                    <label for="msg"></label>
                    <input type="text" name="msg" id="msg" placeholder="message">
                </p>
                <p>
                    <input id="send" type="submit" value="Send">

                </p>
            </form>
        </div>

        <!-- EMOJI BOX -->
        <div class="emoji-container">
            <img class="emoji1" src="./public/images/icons/emoji1.png" alt="" srcset="">
            <img class="emoji2" src="./public/images/icons/emoji2.png" alt="" srcset="">
            <img class="emoji3" src="./public/images/icons/emoji3.png" alt="" srcset="">
            <img class="emoji4" src="./public/images/icons/emoji4.png" alt="" srcset="">
        </div>

        <!-- FOOTER -->
        <div id="footer">
            <div class="start">
                <img class="sicon" src="./public/images/icons/start.png" alt="" srcset="">

            </div>
            <div class="line"></div>
            <div class="ficons">
                <img class="ficon1" src="./public/images/icons/ficon1.png" alt="" srcset="">
                <img class="ficon3" src="./public/images/icons/ficon3.png" alt="" srcset="">
                <img class="ficon2" src="./public/images/icons/ficon2.png" alt="" srcset="">
            </div>
            <div class="line"></div>
            <div class="tabs">
                <div class="tab1">
                    <div class="square"></div>Google
                </div>
                <div class="tab2">
                    <div class="square"></div>Chats
                </div>
                <div class="tab3">
                    <div class="square"></div>VSC
                </div>
            </div>

            <button class="logout-btn"><a href="logout.php">Logout</a></button>
            <div class="time">
                <img class="day" src="./public/images/icons/day.png" alt="" srcset="">
                Day 38
            </div>

        </div>

    </div>

</body>

</html>