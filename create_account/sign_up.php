<!-- 
1. HTML boilerplate
2.create a form
    - action ="add_user.php"
    - username
    - email
    - password
    - password confirm
    - submit

3. link to sign_in.php

4. create a js file for frontend form validation
    - use regex or just check length of input values
    - block the submit button until all is good
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Sign Up</title>
</head>

<body>
    <div id="container">
        <?php
        include "db_connect.php"
        ?>

        <!-- FORM -->
        <div class="sign-container">
            <div class="header">
                <div class="square"></div>
                <p>sign up</p>
                <!-- SVGS -->

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M24 432c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M432 48H208c-17.7 0-32 14.3-32 32V96H128V80c0-44.2 35.8-80 80-80H432c44.2 0 80 35.8 80 80V304c0 44.2-35.8 80-80 80H416V336h16c17.7 0 32-14.3 32-32V80c0-17.7-14.3-32-32-32zM48 448c0 8.8 7.2 16 16 16H320c8.8 0 16-7.2 16-16V256H48V448zM64 128H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192c0-35.3 28.7-64 64-64z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm175 79c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                </svg>
            </div>

            <form action="add_user.php" method="POST" id="signUpForm">

                <p>
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="username">
                    <span class="tooltip">Not a valid username.</span>
                </p>
                <p>
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="email">
                    <span class="tooltip">Not valid email.</span>
                </p>
                <p>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="password">
                    <span class="tooltip">Not secure enough.</span>
                </p>
                <p>
                    <label for="passwordConfirm"></label>
                    <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="confirm password">
                    <span class="tooltip">Not identical.</span>
                </p>
                <p>
                    <input id="submit" type="submit" value="submit">
                    <button><a href="sign_in.php">signin</a></button>
                </p>
            </form>
        </div>
    </div>

</body>

</html>