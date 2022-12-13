<?php
require_once 'pdo.php';

function room_selectall(){
    $sql = "SELECT * , tp.max_people , tp.max_bed FROM rooms ro JOIN type_room tp on tp.type_id = ro.type_id";
    return pdo_query($sql);
}
function rooms_selectall($keyw,$type_id){
    $sql = "select * from rooms where 1";
    if($keyw != ""){
        $sql.=" and room_name like '%".$keyw."%'";
    }
    if($type_id > 0){
        $sql.=" and type_id = '".$type_id."'";
    }
    $sql.= " order by room_id asc"; 
    return pdo_query($sql);
}
function room_selectall_type($type_id){
    $sql = "SELECT * , tp.max_people , tp.max_bed, tp.type_name FROM rooms ro JOIN type_room tp on tp.type_id = ro.type_id where tp.type_id = ?";
    return pdo_query($sql, $type_id);
}
function room_select_by_id($room_id){
    $sql = "select * from rooms where room_id = ?";
    return pdo_query_one($sql, $room_id);
}
function room_image_insert($room_id, $room_img){
    $sql = "insert into room_image(room_id, room_img) value(?,?)";
    pdo_execute($sql, $room_id, $room_img);
}
function room_image_update($room_image_id, $room_id, $room_img){
    $sql = "update room_image set room_id =?, room_img=? where room_image_id= ?";
    pdo_execute($sql, $room_id, $room_img, $room_image_id);
}
function room_insert($room_name, $img, $description, $room_price, $type_id, $img1, $img2, $img3, $img4, $img5){
    $sql = "insert into rooms(room_name, img, description, room_price, type_id) value(?, ?, ?, ?, ?) ";
    $room_id = pdo_execute_get_id($sql, $room_name, $img, $description, $room_price, $type_id);
    room_image_insert($room_id, $img1);
    room_image_insert($room_id, $img2);
    room_image_insert($room_id, $img3);
    room_image_insert($room_id, $img4);
    room_image_insert($room_id, $img5);
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
    $sql = "select * , tp.max_people , tp.max_bed from rooms ro JOIN type_room tp on tp.type_id = ro.type_id where room_id=?";
    return pdo_query_one($sql,$room_id);
}
function room_feedback($room_id){
    $sql="select *, COUNT(fb.feedback_id)as danhgia from rooms ro join feedback fb on ro.room_id = fb.room_id WHERE ro.room_id = ?";
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
function room_img($room_id){
    $sql = "SELECT ri.room_img, ri.room_image_id FROM room_image ri JOIN rooms ro on ri.room_id = ro.room_id WHERE ro.room_id = ?";
    return pdo_query($sql, $room_id);
}