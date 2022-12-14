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
function booking_insert($user_id, $total, $booking_date){
    $sql = "insert into booking(user_id, total, booking_date) values(?, ?, ?, ?)";
    pdo_execute($sql, $user_id, $total, $booking_date);
}
function booking_delete($booking_id){
    $sql = "delete from booking where booking_id = ?";
    pdo_execute($sql, $booking_id);
}
function booking_update($booking_id, $user_id, $total, $booking_date){
    $sql = "update booking set user_id = ?, total = ?, booking_date = ? where booking_id = ?";
    pdo_execute($sql,$user_id, $total, $booking_date, $booking_id);
}
function booking_detail_selectall(){
    $sql = "select * from booking_detail ";
    return pdo_query($sql);
}
function booking_detail_select_by_id($booking_detail_id){
    $sql = "select * from booking_detail where booking_detail_id = ?";
    return pdo_query_one($sql, $booking_detail_id);
}
function booking_detail_insert($booking_id,$room_id, $start_date, $end_date, $into_money, $status){
    $sql = "insert into booking_detail(booking_id, room_id ,start_date,end_date, into_money, status) values(?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $booking_id,$room_id, $start_date, $end_date, $into_money, $status);
}
function booking_detail_delete($booking_detail_id){
    $sql = "delete from booking_detail where booking_detail_id = ?";
    pdo_execute($sql, $booking_detail_id);
}
function booking_detail_update($booking_id, $start_date, $end_date, $into_money, $booking_detail_id){
    $sql = "update booking_detail set booking_id = ?, start_date = ?, end_date = ?, into_money = ? where booking_detail_id = ?";
    pdo_execute($sql ,$booking_id, $start_date, $end_date, $into_money, $booking_detail_id);
}
function booking_detail_check(){
    $sql = "select room_id from booking_detail WHERE '2022-11-14' < start_date and '2022-11-14' < start_date or '2022-11-14' < end_date and '2022-11-14' < end_date";
    return pdo_query($sql);
}
function booking_room($id){
    $sql= "select * from rooms where room_id != ".$id." ";
    return pdo_query($sql);
}
function rooms_statistic(){
    $sql = "select booking_detail_id, start_date, end_date, into_money, status, ro.room_name, us.full_name from rooms ro join booking_detail bkd on bkd.room_id = ro.room_id join booking bk on bkd.booking_id = bk.booking_id join users us on us.user_id = bk.user_id ORDER BY end_date DESC";
    return pdo_query($sql);
}
function booking($user_id){
    $sql = "select ro.room_name, ro.room_id, bk.booking_date, ro.img, start_date, end_date, into_money, status from  rooms ro join booking_detail bd on bd.room_id = ro.room_id join booking bk on bd.booking_id = bk.booking_id WHERE bk.user_id = ? ORDER BY end_date DESC";
    return pdo_query($sql, $user_id);
}
function booking_user($room_id){
    $sql = "SELECT user_id FROM booking bk JOIN booking_detail bd on bk.booking_id = bd.booking_id WHERE bd.room_id = ?";
    return pdo_query($sql, $room_id);
}
function booking_details_update( $status, $booking_detail_id ){
    $sql = "UPDATE booking_detail set status = ? WHERE booking_detail_id = ?";
    pdo_execute($sql,$status, $booking_detail_id);
}