<?php
require_once 'pdo.php';

function users_insert( $full_name, $phone_number ,$address, $CCCD_id, $birth_date, $user_name, $password, $gender, $nationality, $role){
    $sql = "INSERT INTO khach_hang(full_name, phone_number ,address, CCCD_id, birth_date, user_name, password, gender, nationality, role) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $full_name, $phone_number ,$address, $CCCD_id, $birth_date, $user_name, $password, $gender, $nationality, $role );
}

function khach_hang_update($user_id ,$full_name, $phone_number ,$address, $CCCD_id, $birth_date, $user_name, $password, $gender, $nationality, $role){
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
    $sql = "SELECT * FROM users";
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
function check_account($full_name){
    $sql = "select * from users where full_name='".$full_name."' ";
    return pdo_query_one($sql);
}
function check_email($email, $ho_ten){
    $sql = "select * from khach_hang where email='".$email."'AND ho_ten='".$ho_ten."' ";
    return pdo_query_one($sql);
}
function check_user($username,$password){
    $sql = "select * from user where username='".$username."' AND password='".$password."'";
    return pdo_query_one($sql);
}
