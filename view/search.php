<?php
require "../model/dao/rooms.php";
require "../model/dao/booking.php";
$room_id = 0;
if(isset($_POST['checkIn'])){
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];  
$sql = "SELECT room_id FROM booking_detail WHERE '" . $checkIn . "' >= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "'<= end_date OR '" . $checkIn . "' <= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' > start_date and '" . $checkOut . "' <= end_date or '" . $checkIn . "' >= start_date and '" . $checkIn . "' < end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "'>=end_date OR '" . $checkIn . "' <= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "' >= end_date";
echo $sql;
$room_id = pdo_query($sql);
$sql_count = "select room_id from booking_detail";
$room_count = pdo_query($sql_count);
}
if (empty($room_id)) {
    $rooms = room_selectall();
} else {
    $sql = "select * from rooms where room_id != 0 ";
    foreach ($room_id as $id) {
        extract($id);
        $sql =  $sql . " and room_id != " . $room_id . "";
    }
    echo $sql;
    $rooms = pdo_query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../model/content/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family = Anton & family = Inter: wght @ 100; 200; 300; 400; 500; 600; 700; 800; 900 & family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap " rel=" stylesheet ">
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
        <div class="search">
            <form action="">
                <div class="form">
                    <div class="checkIn">
                        <input type="date" value="<?= $checkIn ?>">
                    </div>
                    <div class="checkOut">
                        <input type="date" value="<?= $checkOut ?>">
                    </div>
                    <div class="saerch_btn">
                        <input type="button" value="Book Now">
                    </div>
                </div>
            </form>
        </div>
        <div class="room">
            <p>Room class</p>
            <div class="roomGrid">
                <?php
                if (empty($rooms)) {
                    echo "Xin lỗi quý khách ngày mà quý khách tìm kiếm không còn phòng trống quý khách vui lòng sang ngày khác";
                } else {
                    foreach ($rooms as $room) {
                        extract($room);
                        echo '
                    <div class="grid">
                        <img src="../model/content/image/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv.jpg" alt="">
                        <p id="roomName">' . $room_name . '</p>
                        <div class="desc">
                            <p id="desc-1">' . $description . '</p>
                        </div>
                        <p id="price">Chỉ từ <span>' . $room_price . '$</span> /đêm</p>
                        <div class="btn">
                            <button>Book</button>
                        </div>
                    </div>
                    ';
                    }
                }
                ?>

                <div class="grid">
                    <img src="../model/content/image/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv.jpg" alt="">
                    <p id="roomName">Single Bedroom</p>
                    <div class="desc">
                        <p id="desc-1">37m<sup>2</sup></p>
                        <p id="desc-2">2 giường đơn</p>
                    </div>
                    <p id="price">Chỉ từ <span>1,512,000 VNĐ</span> /đêm</p>
                    <div class="btn">
                        <button>Book</button>
                    </div>
                </div>
                <div class="grid">
                    <img src="../model/content/image/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv.jpg" alt="">
                    <p id="roomName">Single Bedroom</p>
                    <div class="desc">
                        <p id="desc-1">37m<sup>2</sup></p>
                        <p id="desc-2">2 giường đơn</p>
                    </div>
                    <p id="price">Chỉ từ <span>1,512,000 VNĐ</span> /đêm</p>
                    <div class="btn">
                        <button>Book</button>
                    </div>
                </div>
            </div>
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