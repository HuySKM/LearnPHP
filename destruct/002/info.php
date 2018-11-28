<?php
session_start();

if(isset($_SESSION['user'])){
    echo $_SESSION['user'];

    $user = unserialize($_SESSION['user']);

    echo "<pre>";
    print_r($user);
    echo "</pre>";
}