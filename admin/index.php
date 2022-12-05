<?php
include "header.php";
include "../model/dao/pdo.php";
include "../model/dao/rooms.php";
include "../model/dao/booking.php";
include "../model/dao/loaiphong.php";
include "../model/dao/service.php";
include "../model/dao/user.php";
include "../model/dao/thongke.php";
?>
<header>
    <?php
    session_start(); //bắt đầu session
    if (isset($_SESSION["userName"])) { //kiểm tra xem trong session có tồn tại username hay không, nếu tồn tại thì hiển thị nội dung bên dưới
        echo $_SESSION["userName"]; //hiển thị username
        echo "<a href='./controller/logout.php'><button>Logout</button></a>"; //thẻ a điều hướng sang logout.php trong thư mục controller để xử lý việc logout
    }

    ?>
</header>
<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_type_room':
            if (isset($_POST['type_name'])) {
                $type_name = $_POST['type_name'];
                type_insert($type_name);
                $thongbao = "Thêm thành công";
            }
            include "type_room/add.php";
            break;
        case 'list_type_room':
            $list_type_room = type_selectall();
            include "type_room/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['type_id']) && $_GET['type_id'] > 0) {
                type_delete($_GET['type_id']);
            }
            $list_type_room = type_selectall();
            include "type_room/list.php";
            break;
        case 'suadm':
            if (isset($_GET['type_id']) && $_GET['type_id'] > 0) {
                $dm = loai_getinfo($_GET['type_id']);
            }
            include "type_room/update.php";
            break;
        case 'update_type_room':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $type_name = $_POST['type_name'];
                $type_id = $_POST['type_id'];
                type_update($type_id, $type_name);
            }
            $list_type_room = type_selectall();
            include "type_room/list.php";
            break;
            /*phòng*/
        case 'add_room':
            if (isset($_POST['room_name'])) {
                $type_id = $_POST['type_id'];
                $room_name = $_POST['room_name'];
                $room_price = $_POST['room_price'];
                $room_people = $_POST['room_people'];
                $img = $_FILES['img']['name'];
                $description = $_POST['description'];
                $target_dir = "../model/content/img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    room_insert($room_name, $img, $description, $room_price, $type_id, $room_people);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao = "Thêm không thành công";
                }
            }
            $list_type_room = type_selectall();
            include "room/add.php";
            break;
        case 'list_room':
            if (isset($_POST['list_search']) && ($_POST['list_search'])) {
                $keyw = $_POST['keyw'];
                $type_id = $_POST['type_id'];
            } else {
                $keyw = '';
                $type_id = 0;
            }
            $list_type_room = type_selectall();
            $list_room = room_selectall($keyw, $type_id);
            include "room/list.php";
            break;
        case 'xoa_room':
            if (isset($_GET['room_id']) && $_GET['room_id'] > 0) {
                room_delete($_GET['room_id']);
            }
            $list_room = room_selectall("", 0);
            include "room/list.php";
            break;
        case 'sua_room':
            if (isset($_GET['room_id']) && $_GET['room_id'] > 0) {
                $one_room = room_getinfo($_GET['room_id']);
            }
            $list_type_room = type_selectall();
            include "room/update.php";
            break;
        case 'update_room':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $type_id = $_POST['type_id'];
                $room_id = $_POST['room_id'];
                $room_name = $_POST['room_name'];
                $room_price = $_POST['room_price'];
                $room_people = $_POST['room_people'];
                $img = $_FILES['img']['name'];
                $target_dir = "../model/content/img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $description = $_POST['description'];
                room_update($room_id, $room_name, $img, $description, $room_price, $type_id, $room_people);
            }
            $list_type_room = type_selectall();
            $list_room = room_selectall("", 0);
            include "room/list.php";
            break;
        case 'qlyphong':
            $thongke = rooms_statistic();
            include "booking/list.php";
            break;
        case 'deletebooking':
            $id = $_GET['booking_detail_id'];
            booking_detail_delete($id);
            $thongke = rooms_statistic();
            include "room/list.php";
            break;
        case 'qlykh':
            $list_user = user_select_all();
            include "user/list.php";
            break;
        case 'xoakh':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                user_delete($user_id); 
            }
            if(isset($_POST['user_id'])){
                $user_id = $_POST['user_id'];
                // user_delete($user_id);
                var_dump($_POST['user_id']);
            }
            $list_user = user_select_all();
            include "user/list.php";
            break;
        case 'thongke':
            $thongke = thongke();
            include "thongke/thongke.php";
            break;    
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>
</article>
</div>

</body>

</html>