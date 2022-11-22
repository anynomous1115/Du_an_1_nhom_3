1<?php
require_once "pdo.php";
function feedback_selectall(){
    $sql = "select * from feedback ";
    pdo_query($sql);
}
function feedback_select_by_id($feedback_id){
    $sql = "select * from fedback where feedback_id = ?";
    pdo_query_one($sql, $feedback_id);
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