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
    $sql = "select * from rooms where room_id != 0 ";
    foreach ($room_id as $id) {
        extract($id);
        $sql =  $sql . " and room_id != " . $room_id . "";
    }
    $rooms = pdo_query($sql);
}
?>
<link rel="stylesheet" href="model/content/css/search.css">
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
                <div class="input"><input type="date" value="<?= $checkIn ?>" name="checkIn" class="form-control" required></div>
            </div>
            <div class="checkOut">
                <div class="label"><label for="inputEmail4">Ngày Kết Thúc</label><br></div>
                <div class="input"><input type="date" value="<?= $checkOut ?>" name="checkOut" class="form-control" required></div>
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
                        $hinh = $hinhpath . $img;
                        $link_room = "index.php?act=roomct&&room_id=" . $room_id . "&&checkin=" . $checkIn . "&&checkout=" . $checkOut;
                        echo '
                        <div class="roomId">
                         <div class="imgRoom"><a href="' . $link_room . '"><img src="' . $hinh . '" alt=""></a></div>
                         <div class="infor">
                           <a href="' . $link_room . '"><p id="name">' . $room_name . '</p></a>
                           <i class="fa-solid fa-person"></i><span> 2 Người lớn</span>
                           <i class="fa-solid fa-bed"></i><span> 1 Giường đôi</span>
                           <i class="fa-solid fa-house"></i><span>35m<sup>2</sup></span><br>
                           <p id="note">Hotale Suites has been honored with the prestigious Five-Star Award by Forbes.</p>
                           <i class="fa-solid fa-hand-holding-dollar"></i><span id="span_price">' . $room_price . ' VNĐ</span>
                           <div class="roomId_btn"><button type="submit">Book Now</button></div>
                         </div>
                       </div>
                        ';
                    }
                }
                ?>
    </div>
</div>