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
        <div class="room">
            <p>Room class</p>
            <div class="roomGrid">
                <?php
                if (empty($rooms)) {
                    echo "Xin lỗi quý khách ngày mà quý khách tìm kiếm không còn phòng trống quý khách vui lòng sang ngày khác";
                } else {
                    foreach ($rooms as $room) {
                        extract($room);
                        $hinh = $hinhpath .$img;
                        $link_room = "index.php?act=roomct&room_id=".$room_id;
                        echo '
                           <div class="grid">
                               <a href="' . $link_room . '"><img src="' . $hinh . '" alt=""></a>
                               <p id="roomName">' . $room_name . '</p>
                               <div class="desc">
                                 <p id="desc-1">37m<sup>2</sup></p>
                                 <p id="desc-2">2 giường đơn</p>
                               </div>
                               <p id="price">Chỉ từ <span>' . $room_price . '</span> /đêm</p>
                               <div class="btn">
                               <button>Book</button>
                               </div>
                           </div>';
                    }
                }
                ?>

                
            </div>
        </div>
    