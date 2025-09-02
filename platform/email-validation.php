<?php
    require '../db-connection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $clientemail=$_POST['email'];
        $clientcheck= $conn->prepare("SELECT email FROM clientsaccounts WHERE email=?");
        $clientcheck->bind_param("s",$clientemail);
        $clientcheck->execute();
        $clientresult=$clientcheck->get_result();

        $companyemail=$_POST['email'];
        $companycheck=$conn->prepare("SELECT email FROM companyaccounts WHERE email=?");
        $companycheck->bind_param("s", $companyemail);
        $companycheck->execute();
        $companyresult=$companycheck->get_result();
        
        if($clientresult->num_rows!= 0 || $companyresult->num_rows!=0){
            echo json_encode(["success" => false, "message" => "Email deja folosit."]);
        }
        else{
            echo json_encode(["success"=> true,"message"=> "ii ok"]);
        }
    }