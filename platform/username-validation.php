<?php
require "../db-connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $check=$conn->prepare("SELECT username FROM clientsaccounts WHERE username=?");
    $check->bind_param("s", $username);
    $check->execute();
    $result=$check->get_result();
    if($result->num_rows!=0){
        echo json_encode(["success" => false, "message"=> "Username folosit"]);
    }
    else{
        echo json_encode(["success"=>true, "message"=>"email nefolosit"]);
    }
}