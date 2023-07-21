<!-- 

1. validate the form data 

    2. make sure the $_post array is NOT empty

        3.check to make sure 
        -username
        -email
        -password
        -password confirm
        are ALL not empty

        4. check if the values for each of the inputs is validation
            -regex or character length (filter_var) ---- use for email

        5. if everything is good up until here

        6. connect to the db

        7. prepare an insert query

        8a. HASH the password (this is what will be inserted)
        8b. bindParams and Execute (inserting the HASH password not the plaintxt password)

        9. if everyting goes well.. send them back to the sign IN page

    10. if something was NOT good, send them back to the sign UP page
        with an error message(s)


-->
<?php


$username = isset($_POST['username']) ? $_POST['username'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : "";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


if (
    !empty($_POST['username']) and
    !empty($_POST['email']) and
    !empty($_POST['passwordConfirm']) and
    !empty($_POST['password'])
) {
    include "db_connect.php";

    $req = $db->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
    // $req->bindPARAM(":password", $hashed_password, PDO::PARAM_STR);

    // either plug in values between bindparam or execute 
    $req->execute([
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password,
    ]);
    header("Location: sign_in.php");
} else {
    header("Location: sign_up.php");
}
