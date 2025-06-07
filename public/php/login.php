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

    var_dump($user); // vê o que está vindo do banco
    var_dump($password); // vê a senha digitada
    var_dump($user['Password']); // vê o hash no banco


    if ($result->num_rows === 1){
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])){
            $_SESSION['user'] = $user['Name'];
            echo "Logado com sucesso! Redirecionando...";
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