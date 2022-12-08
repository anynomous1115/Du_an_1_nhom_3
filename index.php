<?php
session_start();
include "global.php";
include "model/dao/pdo.php";
include "model/dao/booking.php";
include "model/dao/rooms.php";
include "model/dao/loaiphong.php";
include "model/dao/user.php";
include "./view/header.php";
$loadroom = room_selectall();
$list_type = type_selectall();
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'search':
            include "view/search.php";
            break;
        case 'dangki':
            if(isset($_POST['fullname'])){
                $full_name = $_POST['fullname'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $user_name = $_POST['username'];
                $password = $_POST['password'];
                $CCCD_id = $_POST['CCCD_id'];
                $birth_date = $_POST['birth_date'];
                $address = $_POST['address'];
                $nationality = $_POST['nationality'];
                $role = $_POST['role'];
                users_insert( $full_name, $phone_number ,$address, $CCCD_id, $birth_date,$email, $user_name, $password, $gender, $nationality, $role);
                echo'<script>alert("Đăng kí thành công")</script>';
            }
            if($_GET['chuacotk']==1){
                echo'<script>alert("Bạn chưa có tài khoản vui lòng đăng kí")</script>';
            }
            include "view/dangki.php";
            break; 
        case 'dangnhap':
            if($_GET['chuadangnhap']==1){
                echo'<script>alert("Bạn phải đăng nhập để đặt phòng");</script>';
            }    
            if (isset($_POST['email'])&& $_POST['email']) {
                $email= $_POST['email'];
                $password = $_POST['password'];
                $checkuser = check_user($email, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php'); 
                }else{
                    header('Location: index.php?act=dangki&&chuacotk=1'); 
                }
            }
            include 'view/dangnhap.php';
            break;
        case 'quenmk':
            include 'view/quenmk.php';
            break;
        case 'return_mk':
            if(isset($_POST['email'])){
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)){
                    $_SESSION['check'] = $checkemail;
                  echo '<script>alert('.$_SESSION['check']['password'].');</script>';
                  include "view/mail.php";
                }
            }else{
                echo '<script>alert("Email không có trên hệ thống, Bạn vui lòng thử lại");</script>';
            }
            include 'view/quenmk.php';
            break;      
        case 'dangxuat':
            unset($_SESSION['user']);
            header('Location: index.php');
            break;              
        case 'room':
            $list_room = room_selectall();
            include "view/room.php";
            break;
        case 'roomct':
            if (isset($_GET['room_id']) && ($_GET['room_id'] > 0)) {
              $one_room = room_getinfo($_GET['room_id']);
            } 
            $list_type = type_selectall();
            extract($one_room);
            include "view/roomct.php";
            break;
        case 'booking':
            include "view/booking.php";
            break;
        case 'bookingok':
            if(isset($_POST['start_date'])){
             $user_id = $_SESSION['user']['user_id'];
             $total_money = $_POST['total_money'];
             $room_id = $_POST['room_id'];
             $booking_date = date("Y-m-d");
             $start_date = $_POST['start_date'];
             $end_date = $_POST['end_date'];
             $one_room = room_feedback($_POST['room_id']);
             extract($one_room);
             include 'view/payment.php'; 
            }
             break;
        case 'thanhtoan':
            if(isset($_POST['start_date'])){
                $user_id = $_SESSION['user']['user_id'];
                $total_money = $_POST['total_money'];
                $room_id = $_POST['room_id'];
                $booking_date = date("Y-m-d");
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
            $sql = "insert into booking(user_id, total, booking_date) values( '$user_id','$total_money','$booking_date')";
            $booking_id = pdo_execute_get_id($sql);
            $status = 4;
            booking_detail_insert($booking_id,$room_id, $start_date, $end_date, $total_money, $status);
            header('Location: index.php?act=thanhcong');
            }
        case 'thanhcong':
            echo '<script>alert("Đặt phòng thành công, bạn vui chờ chúng tôi xác nhận thanh toán")</script>';
            include 'view/home.php';
            break;
        case 'lichsu':
            $list = booking($_SESSION['user']['user_id']);
            include 'view/list.php';
            break;
        case 'loai':
            $type_id = $_GET['type_id'];
            $name_type = name_type($type_id);
            extract($name_type);
            $loadroom_type = room_selectall_type($type_id);
            include 'view/type_room.php';
            break;
                    
        default:
        include "view/home.php";
        include "view/footer.php";
        break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>
