<!-- 
1. validate the form data

2. make sure the $_post array is NOT empty

3. check to make sure 
- username
- password
are BOTH not empty

4. connect to the DB

5. prepare a SELECT query where username = ?

6. execute and fetch (may or may not retrieve a user)

7. if a user was fetched... 
    8. password_verify

    9. if we got a user and the password matches... sign them in

    10. save their username and id in SESSION variables

    11. redirect them to the chat page  (to the cacaotalk chat)

12. if anything went wrong, send them back to sign IN page with an error

 -->

<?php
session_start();
if (!empty($_POST))
// !empty($_POST['username']) and
// !empty($_POST['password'])

{
    if (
        isset($_POST['username']) and strlen($_POST['username']) > 2
        and
        isset($_POST['password']) and strlen($_POST['password']) > 5
    ) {
        include "db_connect.php";

        $req = $db->prepare("SELECT * FROM user WHERE username= ?");
        $req->bindParam(1, $_POST['username'], PDO::PARAM_STR);
        $req->execute();
        // since bindParam is there, the "()" can be empty 

        $user = $req->fetch();
        // echo $_POST['password'];
        // echo $user->password;
        // fetch the user data from your query
        // password_verify($_POST['password'], $user->password)
        if ($user) {
            // echo "user is good";
            if (password_verify($_POST['password'], $user->password)) {
                // echo "hello";
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                header("Location: ../index.php");
                exit;
            }
        }
    }
}

header("Location: sign_up.php");
?>