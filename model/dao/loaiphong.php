<?php
//truy vấn ds loại đã nhập

function type_selectall(){
    $sql = "select * from type_room order by type_id ";
    return pdo_query($sql);
}

//thêm mới loại
function type_insert($type_name, $img_type, $max_people, $max_bed){
    $sql = "insert into type_room(type_name, img_type, max_people, max_bed) values(?,?,?,?)";
    pdo_execute($sql,$type_name, $img_type, $max_people, $max_bed);
}
//xóa
function type_delete($type_id){
    $sql = "delete from type_room where type_id=?";
    pdo_execute($sql,$type_id);
}
//cập nhật
function type_update($type_id, $type_name, $img_type, $max_people, $max_bed){
    $sql = "UPDATE type_room SET type_name=?, img_type=?, max_people =?, max_bed = ?  WHERE type_id=?";
    pdo_execute($sql, $type_name, $img_type, $max_people, $max_bed, $type_id);
}
//lấy thông tin 1 mã loại
function loai_getinfo($type_id){
    $sql = "select * from type_room where type_id=?";
    return pdo_query_one($sql,$type_id);
}
function name_type($type_id){
    $sql = "select type_name from type_room where type_id = ?" ;
    return pdo_query_one($sql,$type_id);
}

