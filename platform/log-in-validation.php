<?php
require "../db-connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $check= $conn->prepare("SELECT password FROM clientsaccounts WHERE username=?");
    $check->bind_param("s", $username);
    $check->execute();
    $result=$check->get_result();

    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();
        $hash=$row['password'];

        if(password_verify($password, $hash)){
            echo json_encode(['success'=> true, 'message'=> 'Logat ca client cu succes']);
        }
        else{
            echo json_encode(['success'=> false, 'message'=> 'Parola gresita']);
            exit;

        }
    }
    else{
        $check=$conn->prepare("SELECT password FROM companyaccounts WHERE email=?");
        $check->bind_param("s", $username);
        $check->execute();
        $result=$check->get_result();
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
            $hash=$row['password'];

            if(password_verify($password, $hash)){
                echo json_encode(['success'=> true, 'message'=> 'Logat ca si companie cu succes']);
            }
            else{
                echo json_encode(['success'=> false, 'message'=> 'Parola gresita']);
                exit;
            }
        }
        else{
            echo json_encode(['success'=> false, 'message'=> 'Username sau email gresit']);
        }
    }
}