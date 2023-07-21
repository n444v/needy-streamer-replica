<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=cacaotalk;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (Exception $e) {
    echo "Database Connection Error";
    die();
};
