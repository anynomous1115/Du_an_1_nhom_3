<?php
include "header.php";
include "../model/dao/pdo.php";
include "../model/dao/rooms.php";
include "../model/dao/booking.php";
include "../model/dao/loaiphong.php";
include "../model/dao/service.php";
include "../model/dao/user.php";
include "../model/dao/feedback.php";
include "../model/dao/thongke.php";
?>
<header>
    <?php
    //bắt đầu session
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
                $img_type = $_FILES['img_type']['name'];
                $max_people = $_POST['max_people'];
                $max_bed = $_POST['max_bed'];
                type_insert($type_name, $img_type, $max_people, $max_bed);
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
            if (isset($_POST['type_name'])) {
                $type_name = $_POST['type_name'];
                $type_id = $_POST['type_id'];
                $img_type = $_FILES['img_type']['name'];
                $max_people = $_POST['max_people'];
                $max_bed = $_POST['max_bed'];
                $target_dir = "../model/content/img/";
                $target_file = $target_dir . basename($_FILES["img_type"]["name"]);
                if (move_uploaded_file($_FILES["img_type"]["tmp_name"], $target_file)){
                    type_update($type_id, $type_name, $img_type, $max_people, $max_bed);
                }
                
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
                $img = $_FILES['img']['name'];
                $description = $_POST['description'];
                $img1 = $_FILES['img1']['name'];
                $img2 = $_FILES['img2']['name'];
                $img3 = $_FILES['img3']['name'];
                $img4 = $_FILES['img4']['name'];
                $img5 = $_FILES['img5']['name'];
                $target_dir = "../model/content/img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
                $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
                $target_file3 = $target_dir . basename($_FILES["img3"]["name"]);
                $target_file4 = $target_dir . basename($_FILES["img4"]["name"]);
                $target_file5 = $target_dir . basename($_FILES["img5"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["img4"]["tmp_name"], $target_file4) && move_uploaded_file($_FILES["img5"]["tmp_name"], $target_file5)) {
                    room_insert($room_name, $img, $description, $room_price, $type_id, $img1, $img2, $img3, $img4, $img5);
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
            $list_room = rooms_selectall($keyw, $type_id);
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
                $list_img = room_img($_GET['room_id']);
            }
            $list_type_room = type_selectall();
            include "room/update.php";
            break;
        case 'update_room':
            if (isset($_POST['type_id'])) {
                $type_id = $_POST['type_id'];
                $room_id = $_POST['room_id'];
                $room_name = $_POST['room_name'];
                $room_price = $_POST['room_price'];
                $img = $_FILES['img']['name'];
                $target_dir = "../model/content/img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
                $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
                $target_file3 = $target_dir . basename($_FILES["img3"]["name"]);
                $target_file4 = $target_dir . basename($_FILES["img4"]["name"]);
                $target_file5 = $target_dir . basename($_FILES["img5"]["name"]);
                $description = $_POST['description'];
                $img1 = $_FILES['img1']['name'];
                $img2 = $_FILES['img2']['name'];
                $img3 = $_FILES['img3']['name'];
                $img4 = $_FILES['img4']['name'];
                $img5 = $_FILES['img5']['name'];
                $img_id1 = $_POST['img_id1'];
                $img_id2 = $_POST['img_id2'];
                $img_id3 = $_POST['img_id3'];
                $img_id4 = $_POST['img_id4'];
                $img_id5 = $_POST['img_id5'];
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["img4"]["tmp_name"], $target_file4) && move_uploaded_file($_FILES["img5"]["tmp_name"], $target_file5)) {
                    room_update($room_id, $room_name, $img, $description, $room_price, $type_id);
                    room_image_update($img_id1, $room_id, $img1);
                    room_image_update($img_id2, $room_id, $img2);
                    room_image_update($img_id3, $room_id, $img3);
                    room_image_update($img_id4, $room_id, $img4);
                    room_image_update($img_id5, $room_id, $img5);
                    $thongbao = "Cập nhật thành công";
                }
            }
            $list_type_room = type_selectall();
            $list_room = room_selectall("", 0);
            include "room/list.php";
            break;
        case 'qlyphong':
            $thongke = rooms_statistic();
            include "booking/list.php";
            break;
        case 'xacnhan':
            $thongke = rooms_statistic();
            if (isset($_GET['booking_detail_id'])) {
                $booking_detail_id = $_GET['booking_detail_id'];
                $status = 2;
                booking_details_update($status, $booking_detail_id);
            }
            $thongke = rooms_statistic();
            include "booking/list.php";
            break;
        case 'huy':
            if (isset($_GET['booking_detail_id'])) {
                $booking_detail_id = $_GET['booking_detail_id'];
                $status = 3;
                booking_details_update($status, $booking_detail_id);
            }
            $thongke = rooms_statistic();
            include "booking/list.php";
            break;
        case 'checkin':
            if (isset($_GET['booking_detail_id'])) {
                $booking_detail_id = $_GET['booking_detail_id'];
                $status = 1;
                booking_details_update($status, $booking_detail_id);
            }
            $thongke = rooms_statistic();
            include "booking/list.php";
            break;
        case 'checkout':
            if (isset($_GET['booking_detail_id'])) {
                $booking_detail_id = $_GET['booking_detail_id'];
                $status = 0;
                booking_details_update($status, $booking_detail_id);
            }
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
        case 'qlynv':
            $list_user = user_select_staff();
            include "user/list_staff.php";
            break;
        case 'add_staff':
            if (isset($_POST['fullname'])) {
                $full_name = $_POST['fullname'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $user_name = $_POST['user_name'];
                $password = $_POST['password'];
                $CCCD_id = $_POST['CCCD_id'];
                $birth_date = $_POST['birth_date'];
                $address = $_POST['address'];
                $nationality = $_POST['nationality'];
                $role = $_POST['role'];
                users_insert($full_name, $phone_number, $address, $CCCD_id, $birth_date, $email, $user_name, $password, $gender, $nationality, $role);
                echo '<script>alert("Thêm nhân viên thành công")</script>';
            }
            include "user/add_staff.php";
            break;
        case 'xoakh':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                user_delete($user_id);
            }
            if (isset($_POST['user_id'])) {
                $user_id = $_POST['user_id'];
                // user_delete($user_id);
                var_dump($_POST['user_id']);
            }
            $list_user = user_select_all();
            include "user/list.php";
            break;
        case 'thongke':
            $thongke = thongke();
            $room_count = count_room();
            extract($room_count);
            $sum_money = sum_money();
            $count_user = count_user();
            extract($count_user);
            include "thongke/thongke.php";
            break;
        case 'qlyfeedback':
            $listfb = thong_ke_feedback();
            include 'feedback/list.php';
            break;
        case 'ctbl':
            $room_id = $_GET['room_id'];
            $items = feedback_select_by_room($room_id);
            include 'feedback/detail.php';
            break;
        case 'xoadg':
            $room_id = $_GET['room_id'];
            $feedback_id = $_GET['feedback_id'];
            feedback_delete($feedback_id);
            $listfb = thong_ke_feedback();
            include 'feedback/list.php';
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