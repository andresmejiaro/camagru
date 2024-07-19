<?php
include_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    echo "Username: $username, Email: $email, Password: $password, Confirm Password: $confirm_password";
    
    $password_hash = password_hash($password_hash, PASSWORD_BCRYPT);
    
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password_hash);
    
    if ($stmt->execute()){
        echo "yes";
    } else {
        echo "nah";
    }
}
    
?>