<?php

// Đang ký
function register($data){
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO user (kh_name, kh_email , kh_avatar , kh_password , kh_phone, kh_address) VALUES ('".$data["kh_name"]."' ,' ".$data["kh_email"]."' ,'".$data["kh_avatar"]." ',  '".$data["kh_password"]."' ,  '".$data["kh_phone"]."',  '".$data["kh_address"]."')");
    $stmt->execute();
}

// Đang ký
function getAllUser(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}


// Gọi user theo email
function getUserFind($email){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM `user` WHERE `kh_email` = '".trim($email)."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}


//Update quyền user
function updateUser($data){
    $conn = connect();
    $stmt = $conn->prepare("UPDATE  `user`  
    SET `role` =  ". $data["role"]." WHERE `kh_id` = ". $data["id"]."");
    $stmt->execute();
}

//Update thông tin user
function updateInfor($data, $id){
    $conn = connect();
    $stmt = $conn->prepare("UPDATE  user  
    SET kh_name = '".$data["kh_name"]."', kh_avatar= '".$data["kh_avatar"]."', kh_password= '".$data["kh_pass"]."', kh_email=' ".$data["kh_email"]."' , kh_phone ='".$data["kh_phone"]."', kh_address = '".$data["kh_address"]."'  WHERE user.kh_id = ".(int)$id."");
    $stmt->execute();
}


// Gọi user theo id
function getUserId($id){
    // dd($email);
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM user WHERE kh_id = $id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}


