<?php
require_once "pdo.php";
function feedback_selectall(){
    $sql = "select * from feedback ";
    pdo_query($sql);
}
function feedback_select_by_room($room_id){
    $sql = "SELECT b.*, ro.room_name, us.full_name FROM rooms ro INNER JOIN  feedback b ON ro.room_id=b.room_id INNER JOIN users us ON b.user_id = us.user_id WHERE b.room_id=? ORDER BY feedback_date DESC";
    return pdo_query($sql, $room_id);
}
function feedback_insert($content, $room_id, $user_id, $feedback_date){
    $sql = "insert into feedback(content, room_id, user_id, feedback_date) values(?, ?, ?, ?)";
    pdo_execute($sql, $content, $room_id, $user_id, $feedback_date);
}
function feedback_delete($feedback_id){
    $sql = "delete from feedback where feedback_id=?";
    pdo_execute($sql, $feedback_id);
}
function feedback_update($content, $room_id, $user_id, $feedback_date, $feedback_id){
    $sql = "update feedback set content = ?, room_id = ?, user_id = ?, feedback_date = ? where feedback_id = ?";
    pdo_execute($content, $room_id, $user_id, $feedback_date, $feedback_id);
}