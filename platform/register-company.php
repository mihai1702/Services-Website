<?php
    require "../db-connection.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $companyname=$_POST['companyname'];
        $cui=$_POST['cui'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashed_password=password_hash($password, PASSWORD_DEFAULT);

        $sql=$conn->prepare('INSERT INTO companyaccounts (companyname, cui, email, password, active) VALUES (?,?,?,?, 1)');
        $sql->bind_param('ssss', $companyname, $cui, $email, $hashed_password);
        if($sql->execute()){
        //include 'admin/PHPMailer.php';
        echo json_encode(array('success'=> 'true','message'=> 'Inregistrat cu succes'));
    }
    else{
        echo json_encode(array('success'=> 'false','message'=> 'Eroare la inregistrare'));
    }
    }