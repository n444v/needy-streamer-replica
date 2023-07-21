<?php
session_start();
session_destroy();
header("Location: http://localhost/sites/cacaoTalk/create_account/sign_in.php");
