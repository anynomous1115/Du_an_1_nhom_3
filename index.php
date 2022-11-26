
<?php
include "global.php";
include "model/dao/pdo.php";
include "model/dao/booking.php";
include "model/dao/rooms.php";
include "model/dao/loaiphong.php";
include "./view/header.php";
$loadroom = room_selectall();
$list_type = type_selectall();
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'room':
            $list_room = room_selectall();
            include "view/room.php";
            break;
        case 'roomct':
            if (isset($_GET['room_id']) && ($_GET['room_id'] > 0)) {
              $one_room = room_getinfo($_GET['room_id']);
            } 
            $list_type = type_selectall();
                include "view/roomct.php";
                include "./view/footer.php";
            break;
            case 'booking':
                include "view/booking.php";
                include "./view/footer.php";
                break;
        default:
        include "view/home.php";
        include "view/footer.php";
        break;
    }
} else {
    include "view/home.php";
    include "view/footer.php";
}
?>