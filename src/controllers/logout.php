<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_destroy();
    header('location: ../../public/index.html');
    exit();
}

?>