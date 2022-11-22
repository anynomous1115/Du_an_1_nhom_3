<?php
require_once "pdo.php";
function booking_selectall(){
    $sql = "select * from booking ";
    return pdo_query($sql);
}
function booking_select_by_id($booking_id){
    $sql = "select * from booking where booking_id = ?";
    return pdo_query_one($sql, $booking_id);
}
function bookng_insert($user_id, $total, $booking_date){
    $sql = "insert into booking(user_id, total, booking_date) values(?, ?, ?, ?)";
    pdo_execute($sql, $user_id, $total, $booking_date);
}
function booking_delete($booking_id){
    $sql = "delete from booking where booking_id = ?";
    pdo_execute($sql, $booking_id);
}
function booking_update($booking_id, $user_id, $total, $booking_date){
    $sql = "update booking set user_id = ?, total = ?, booking_date = ? where booking_id = ?";
    pdo_execut($user_id, $total, $booking_date, $booking_id);
}
function booking_detail_selectall(){
    $sql = "select * from booking_detail ";
    return pdo_query($sql);
}
function booking_select_by_id($booking_detail_id){
    $sql = "select * from booking where booking_detail_id = ?";
    return pdo_query_one($sql, $booking_detail_id);
}
function bookng_insert($booking_id, $start_date, $end_date, $into_money){
    $sql = "insert into booking(user_id, total, booking_date) values(?, ?, ?, ?)";
    pdo_execute($sql, $user_id, $total, $booking_date);
}
function booking_delete($booking_detail_id){
    $sql = "delete from booking where booking_detail_id = ?";
    pdo_execute($sql, $booking_detail_id);
}
function booking_update($booking_id, $start_date, $end_date, $into_money, $booking_detail_id){
    $sql = "update booking set booking_id = ?, start_date = ?, end_date = ?, into_money = ? where booking_detail_id = ?";
    pdo_execut($sql ,$booking_id, $start_date, $end_date, $into_money, $booking_detail_id);
}