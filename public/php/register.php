<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Variables
    $name = trim($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Encrypt password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE Name = ? OR Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        echo "Username or email already in use.";
        exit();
    }

    $sql = "INSERT INTO users(Name, Email, Password) VALUES(?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()){
        header("Location: ../index.html");
        exit();
    }
    else{
        echo "Erro " . $stmt->error; 
    }

    $stmt->close();
    $conn->close();
}

?>