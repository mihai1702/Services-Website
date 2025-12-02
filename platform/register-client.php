<?php
require '../db-connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];


    $hashed_password=password_hash($password, PASSWORD_DEFAULT);
    
    $sql=$conn->prepare('INSERT INTO clientsaccounts (username, email, password, name, surname, age) VALUES(?,?,?,?,?,?)');
    $sql->bind_param('sssssi', $username, $email, $hashed_password, $name, $surname, $age);

    if($sql->execute()){
        //include 'admin/PHPMailer.php';
        echo json_encode(array('success'=> 'true','message'=> 'Inregistrat cu succes'));
    }
    else{
        echo json_encode(array('success'=> 'false','message'=> 'Eroare la inregistrare'));
    }
}