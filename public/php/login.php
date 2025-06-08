<?php
ob_start();
session_start();
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1){
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])){
            $_SESSION['user'] = $user['Name'];
            header('location: ../pages/home.php');
            exit();
        }
        else{
            echo "Password incorrect!";
        }
        
    }
    else{
        echo "Usuario não encontrado";
    }
}



$stmt->close();
$conn->close();


?>