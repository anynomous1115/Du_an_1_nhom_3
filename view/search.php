<?php
if (isset($_POST['checkIn'])) {
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $sql = "SELECT room_id FROM booking_detail WHERE '" . $checkIn . "' >= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "'<= end_date OR '" . $checkIn . "' <= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' > start_date and '" . $checkOut . "' <= end_date or '" . $checkIn . "' >= start_date and '" . $checkIn . "' < end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "'>=end_date OR '" . $checkIn . "' <= start_date and '" . $checkIn . "' <= end_date and '" . $checkOut . "' >= start_date and '" . $checkOut . "' >= end_date";
    $room_id = pdo_query($sql);
}
if (empty($room_id)) {
    $rooms = room_selectall();
} else {
    $sql = "select * , tp.max_people , tp.max_bed FROM rooms ro JOIN type_room tp on tp.type_id = ro.type_id where room_id != 0 ";
    foreach ($room_id as $id) {
        extract($id);
        $sql =  $sql . " and room_id != " . $room_id . "";
    }
    $rooms = pdo_query($sql);
}
?>
<link rel="stylesheet" href="model/content/css/searchs.css">
<div class="title">
    <p>Room Search</p>
</div>
</div>
<div class="room_search">
    <div class="search_dates">
        <p>Ngày đặt lịch</p>
        <form action="index.php?act=search" method="POST">
            <div class="checkIn">
                <div class="label"><label for="inputEmail4">Ngày Bắt Đầu</label><br></div>
                <div class="input"><input type="date" value="<?= $checkIn ?>" id="startdateId" class="form-control" name="checkIn" required></div>
            </div>
            <div class="checkOut">
                <div class="label"><label for="inputEmail4">Ngày Kết Thúc</label><br></div>
                <div class="input"><input type="date" value="<?= $checkOut ?>" id="enddateId" class="form-control" name="checkOut" required></div>
            </div>
            <div class="saerch_btn">
                <div class="btn"><input type="submit" value="Book Now"></div>
            </div>
        </form>
    </div>
    <div class="rooms">
        <?php
        if (empty($rooms)) {
            echo "Xin lỗi quý khách ngày mà quý khách tìm kiếm không còn phòng trống quý khách vui lòng sang ngày khác";
        } else {
            foreach ($rooms as $room) {
                extract($room);
                if (isset($_SESSION['user'])) {
                    $booking_room = "index.php?act=booking&&room_id=" . $room_id . "&&checkin=" . $checkIn . "&&checkout=" . $checkOut;
                } else {
                    $booking_room = "index.php?act=dangnhap&&chuadangnhap=1";
                }

                $hinh = $hinhpath . $img;
                $link_room = "index.php?act=roomct&&room_id=" . $room_id . "&&checkin=" . $checkIn . "&&checkout=" . $checkOut;
                echo '
                        <div class="roomId">
                         <div class="imgRoom"><a href="' . $link_room . '"><img src="' . $hinh . '" alt=""></a></div>
                         <div class="infor">
                           <a href="' . $link_room . '"><p id="name">' . $room_name . '</p></a>
                           <i class="fa-solid fa-person"></i><span> '.$max_people.' Người lớn</span>
                           <i class="fa-solid fa-bed"></i><span> '.$max_bed.' Giường đơn</span>
                           <i class="fa-solid fa-house"></i><span>35m<sup>2</sup></span><br>
                           <p id="note">'.$description.'</p>
                           <i class="fa-solid fa-hand-holding-dollar"></i><span id="span_price">' . $room_price . ' VNĐ</span>';
                if (isset($_SESSION['user'])) {
                    if (!$_SESSION['user']['role'] == 0) {
                        echo ' <div class="roomId_btn"><a href="' . $booking_room . '"><button type="submit">Book Now</button></a></div>
                         </div>
                       </div>
                        ';
                    }else{
                        echo '</div>
                        </div>';
                    }
                } else {
                    echo ' <div class="roomId_btn"><a href="' . $booking_room . '"><button type="submit">Book Now</button></a></div>
                         </div>
                       </div>
                        ';
                }
            }
        }
        ?>
    </div>
</div>