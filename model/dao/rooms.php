<?php
require_once 'pdo.php';

function room_selectall(){
    $sql = "select * from rooms";
    return pdo_query($sql);
}
function room_select_by_id($room_id){
    $sql = "select * from rooms where room_id = ?";
    return pdo_query_one($sql, $room_id);
}
function room_insert($room_name, $img, $description, $room_price, $type_id){
    $sql = "insert into rooms(room_name, img, description, room_price, type_id) value(?, ?, ?, ?, ?) ";
    pdo_execute($sql, $room_name, $img, $description, $room_price, $type_id);
}
function room_delete($room_id){
    $sql = "delete from rooms where room_id = ?";
    pdo_execute($sql, $room_id);
}
function room_update($room_id, $room_name, $img, $description, $room_price, $type_id){
    $sql = "update rooms set room_name =?, img=?, description=?, room_price=?, type_id=? where room_id= ?";
    pdo_execute($sql,$room_name, $img, $description, $room_price, $type_id, $room_id );
}
function room_getinfo($room_id){
    $sql = "select * from rooms where room_id=?";
    return pdo_query_one($sql,$room_id);
}
function room_relate_getinfo($room_id,$type_id){
    $sql = "select * from rooms where type_id=".$type_id." AND room_id <> ".$room_id;
    return pdo_query($sql);
}
function room_relate_getinfos($type_id, $room_id){
    $sql = "select * from rooms where type_id=".$type_id." and room_id !=".$room_id."";
    return pdo_query($sql);
}
function room_service($type_id){
    $sql = "SELECT service_name FROM service WHERE service_id IN (SELECT service_id FROM room_detail WHERE type_id = ?)";
    return pdo_query($sql, $type_id);

}