<?php
require_once "pdo.php";
function thongke(){
    $sql = "select tp.type_name from booking_detail bd JOIN rooms ro on bd.room_id = ro.room_id  JOIN type_room tp on ro.type_id = tp.type_id GROUP BY tp.type_name ORDER BY COUNT(bd.room_id) DESC LIMIT 1";
    return pdo_query($sql);
}
function count_user(){
    $sql = "SELECT COUNT(*) as user_sigin FROM users WHERE role =2";
    return pdo_query_one($sql);
}
function count_room(){
    $sql = "SELECT COUNT(*) as room_count FROM rooms";
    return pdo_query_one($sql);
}
function thong_ke_feedback(){
    $sql = "SELECT ro.room_id, ro.room_name,"
            . " COUNT(*) so_luong,"
            . " MIN(fb.feedback_date) cu_nhat,"
            . " MAX(fb.feedback_date) moi_nhat"
            . " FROM feedback fb "
            . " JOIN rooms ro ON ro.room_id=fb.room_id "
            . " GROUP BY ro.room_id, ro.room_name"
            . " HAVING so_luong > 0";
    return pdo_query($sql);
}
?>