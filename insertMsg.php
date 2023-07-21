<?php
session_start();
/*
    1. check that the user input a message AND username
        2. Connect to the DB
        3. Prepare an INSERT query
        4. Execute it, passing in the $_POST data
    5. header('Location: index.php');
*/


// $username = isset($_POST['username']) ? $_POST['username'] : "";
$msg = isset($_POST['msg']) ? $_POST['msg'] : "";
// echo $msg;

if (
    // !empty($_POST['username']) and
    !empty($_POST['msg'])


) {
    echo "hello";
    include "db_connect.php";
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] - 5 : 0;

    $req = $db->prepare("INSERT INTO messages (user_id, msg) VALUES (:user_id, :msg)");
    $req->execute([
        'user_id' => $_SESSION['user_id'],
        'msg' => $msg
    ]);

    header("Location: index.php?limit=$limit");
} else {
    echo "Missing fields";
}
