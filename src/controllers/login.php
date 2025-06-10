<?php
session_start();
include_once('../config/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows !== 1){
        echo "Usuario não encontrado";
        exit();
    }

    $user = $result->fetch_assoc();

    if(!password_verify($password, $user['Password'])){
        echo "Password incorrect!";
        exit();
    }

    $_SESSION['user'] = $user['Name'];
    header('location: ../views/home.php');
    exit();
}

$stmt->close();
$conn->close();


?>