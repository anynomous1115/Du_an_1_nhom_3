<?php
include "../model/dao/pdo.php";
include "../model/dao/loaiphong.php";

$list_type = type_selectall();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../model/content/css/style.css">
    <link rel="stylesheet" href="../model/content/css/booking.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family = Anton & family = Inter: wght @ 100; 200; 300; 400; 500; 600; 700; 800; 900 & family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "
        rel=" stylesheet ">
    <link rel="stylesheet" href="./model/content/css/font_icon/fontawesome-free-6.2.0-web/css/all.min.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <img src="../model/content/image/e20501efe7e621b878f7.jpg" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Room</a></li>
                    <li><a href="">Address</a></li>
                </ul>

            </div>
            <div class="login">
                <button>Login</button>
            </div>
        </div>
        <div class="banner">
            <img src="../model/content/image/beautiful-luxury-outdoor-swimming-pool-hotel-resort.jpg" alt="">
        </div>
       <div class="content">
        <div class="title">
            <h1>Đặt phòng</h1>
        </div>
        <form action="">
        <table>
            <tr>
                <td>Chi tiết đặt phòng</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Loại phòng</td>
                <td>Số phòng</td>
                <td>Số người</td>
                <td></td>
            </tr>
            <tr>
                <td><select name="">
                    <?php foreach ($list_type as $loaiphong){
                        extract($loaiphong);
                        echo '<option value="'.$type_id.'">'.$type_name.'</option>';
                    }
                    ?>
                </select></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><button>Xóa</button></td>
            </tr>
        </table>
        Ngày đến
        <br>
        <input type="date" name="" id="">
        <br>
        Ngày đi
        <br>
        <input type="date">
        <br>
        <h3>
            Thông tin người đặt phòng
        </h3>
        Họ tên
        <br>
        <input type="text" name="">
        <br>
        SĐT
        <br>
        <input type="text" name="">
        <br>
        Email
        <br>
        <input type="text" name="">
        <br>
        Ghi chú
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
       <div class="btn-book">
        <button>Đặt phòng</button>
        </div>
        </form>
       </div>
        <div class="footer">
            <div class="footer-1">
                <p>Trụ sở: Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                <p>Email: caosonhai1410@gmail.com</p>
            </div>
            <div class="footer-2">
                <p>ĐIỀU KHOẢN & QUY ĐỊNH</p>
                <p>Điều khoản chung</p>
                <p>Quy định chung</p>
                <p>Quy định về thanh toán</p>
                <p>Quy định về xác nhận thông tin đặt phòng</p>
                <p>Chính sách giải quyết tranh chấp</p>
                <p>Chính sách quyền riêng tư</p>
            </div>
        </div>
    </div>
</body>
<script src="./model/content/js/index.js"></script>
</html>

