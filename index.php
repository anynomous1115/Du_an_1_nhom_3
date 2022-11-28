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
}
include "view/footer.php";
?>
