<h1>chat</h1>
<?php
include "db_connect.php";


// $query = "SELECT u.username, m.user_id 
// FROM user u
// INNER JOIN messages m 
// ON u.id = m.user_id";


// $response = $db->query($query);
// while ($chats = $response->fetch(PDO::FETCH_OBJ)) {
//     echo " $chats->username - $chats->id<br>";
// }

$q2 = "SELECT m.username, m.msg, m.user_id, u.username, u.id
            FROM messages AS m
            INNER JOIN user as u
            ON m.user_id = u.username";


$response = $db->query($q2);
while ($chat = $response->fetch(PDO::FETCH_OBJ)) {
    echo "$chat->id - $chat->user_id";
}
