<?php

$limit = isset($_GET['limit']) ? (int)$_GET['limit'] + 5 : 5;

$req = $db->prepare("SELECT u.username, u.id, m.user_id, m.msg
            FROM user u
            INNER JOIN messages m 
            ON u.id = m.user_id
            ORDER BY m.id DESC
            LIMIT :limit");

// -- * FROM messages ORDER BY id DESC LIMIT :limit");

$req->bindParam('limit', $limit, PDO::PARAM_INT);
$req->execute();
// $messages = $req->fetch();


// $response = $db->query($query);
// while ($chats = $req->fetch()) {
//     echo " $chats->username - $chats->id<br>";
// }
