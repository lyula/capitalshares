<?php

session_start();

if(isset($_SESSION['USER_ID']))
{
    unset($_SESSION['user_id']);
}

header("Location: login.php");
die;