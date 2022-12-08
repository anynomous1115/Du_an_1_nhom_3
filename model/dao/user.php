<?php
require_once 'pdo.php';

function users_insert( $full_name, $phone_number ,$address, $CCCD_id, $birth_date,$email, $user_name, $password, $gender, $nationality, $role){
    $sql = "INSERT INTO users(full_name, phone_number ,address, CCCD_id, birth_date, email, user_name, password, gender, nationality, role) VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?)";
    pdo_execute($sql, $full_name, $phone_number ,$address, $CCCD_id, $birth_date,$email, $user_name, $password, $gender, $nationality, $role );
}

function users_update($user_id ,$full_name, $phone_number ,$address, $CCCD_id, $birth_date, $user_name, $password, $gender, $nationality, $role){
    $sql = "UPDATE users SET full_name=?, phone_number=? ,address=?, CCCD_id=?, birth_date=?, user_name=?, password=?, gender=?, nationality=?, role=? WHERE ma_kh=?";
    pdo_execute($user_id ,$full_name, $phone_number ,$address, $CCCD_id, $birth_date, $user_name, $password, $gender, $nationality, $role);
}

function user_delete($user_id){
    $sql = "DELETE FROM users  WHERE user_id=?";
    if(is_array($user_id)){
        foreach ($user_id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $user_id);
    }
}

function user_select_all(){
    $sql = "SELECT * FROM users where role = 2";
    return pdo_query($sql);
}

function user_select_by_id($user_id){
    $sql = "SELECT * FROM users WHERE user_id=?";
    return pdo_query_one($sql, $user_id);
}


function user_change_password($user_id, $mat_khau_moi){
    $sql = "UPDATE users SET password=? WHERE user_id=?";
    pdo_execute($sql, $mat_khau_moi, $user_id);
}
function check_email($email){
    $sql = "select * from users where email=?";
    return pdo_query($sql, $email);
}
function check_user($email,$password){
    $sql = "select * from users where email='".$email."' AND password='".$password."'";
    return pdo_query_one($sql);
}
