<?php
require_once "pdo.php";
function thongke(){
    $sql = "select tp.type_name, COUNT(us.user_id) as user_sigin, COUNT(ro.room_id) as room_count from users us JOIN booking bk on bk.user_id = us.user_id join booking_detail bd ON bk.booking_id = bd.booking_id JOIN rooms ro on bd.room_id = ro.room_id  JOIN type_room tp on ro.type_id = tp.type_id GROUP BY tp.type_name ORDER BY COUNT(bd.room_id) DESC LIMIT 1";
    return pdo_query($sql);
}
?>