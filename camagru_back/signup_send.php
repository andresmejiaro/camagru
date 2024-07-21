<?php
include_once("database.php");

use PHPMailer;


function sign_form_htmlspecialchars(){
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    $sign_form = ["username" => $username, "email" => $email, "password" => $password, "confirm_password"=>$confirm_password];
    return $sign_form;
}

function validation_empty_field($sign_form){
    foreach($sign_form as $key => $value){
        if (empty($value)){
            return 0;
        }
    }
    return 1;
}
 
function validation_password_complexity($sign_form){
    if (strlen($sign_form["password"])< 8)
        return 0;
    if (!preg_match('/[A-Z]/',$sign_form["password"]))
        return 0;
    if (!preg_match('/[a-z]/',$sign_form["password"]))
        return 0;
    if (!preg_match('/[0-9]/',$sign_form["password"]))
        return 0;
    if (!preg_match('/[\W]/',$sign_form["password"]))
        return 0;
    return 1;
};


function validation_username($sign_form){
    if (strlen($sign_form["username"]) < 4){
        return 0;
    }

    $pdo = connect_db();
    if($pdo === null){
        return ;
    }

    $stmt = $pdo->prepare("SELECT username FROM USERS WHERE username = :username");
    $stmt->bindParam(':username', $sign_form["username"]);
    
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result){
        return 0;
    }
    return 1;
}

    
function sign_form_checks($sign_form){
    
    $validations = ['validation_empty_field', 'validation_password_complexity',
        'validation_username'];            
    foreach($validations as $validation){
        if (!$validation($sign_form)){
            return 0;
        }
    }
    return 1;
}


function send_mail($username,$subject,$content){
    $mail = new PHPMailler  
}





function send_form_db($sign_form){
    $password_hash = password_hash($sign_form["password"], PASSWORD_BCRYPT);
    $pdo = connect_db();
    
    if($pdo === null){
        return ;
    }

    $token = bin2hex(random_bytes_(50))

    

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, token) VALUES (:username, :email, :password, :token)");
    $stmt->bindParam(':username', $sign_form["username"]);
    $stmt->bindParam(':email', $sign_form["email"]);
    $stmt->bindParam(':password', $password_hash);
    $stmt->bindParam(':token', $token);
    
    if ($stmt->execute()){
        echo "yes";
    } else {
        echo "nah";
    }
    $pdo = null;
}



if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $sign_form = sign_form_htmlspecialchars();
    
    if (!sign_form_checks($sign_form)){
        send_form_db($sign_form);
    } 
    
}
    
?>