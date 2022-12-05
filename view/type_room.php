<link rel="stylesheet" href="model/content/css/searchs.css">
<div class="title">
    <p><?=$type_name?></p>
</div>
</div>
<div class="room_search">
    <div class="search_dates">
        <p>Ngày đặt lịch</p>
        <form action="index.php?act=search" method="POST">
            <div class="checkIn">
                <div class="label"><label for="inputEmail4">Ngày Bắt Đầu</label><br></div>
                <div class="input"><input type="date" id="startdateId" class="form-control" name="checkIn" required></div>
            </div>
            <div class="checkOut">
                <div class="label"><label for="inputEmail4">Ngày Kết Thúc</label><br></div>
                <div class="input"><input type="date" id="enddateId" class="form-control" name="checkOut" required></div>
            </div>
            <div class="saerch_btn">
                <div class="btn"><input type="submit" value="Book Now"></div>
            </div>
        </form>
    </div>
    <div class="rooms">
        <?php
            foreach ($loadroom_type as $room) {
                extract($room);
                $hinh = $hinhpath . $img;
                echo '
                        <div class="roomId">
                         <div class="imgRoom"><a href=""><img src="' . $hinh . '" alt=""></a></div>
                         <div class="infor">
                           <a href=""><p id="name">' . $room_name . '</p></a>
                           <i class="fa-solid fa-person"></i><span> '.$max_people.' Người lớn</span>
                           <i class="fa-solid fa-bed"></i><span> '.$max_bed.' Giường đơn</span>
                           <i class="fa-solid fa-house"></i><span>35m<sup>2</sup></span><br>
                           <p id="note">'.$description.'</p>
                           <i class="fa-solid fa-hand-holding-dollar"></i><span id="span_price">' . $room_price . ' VNĐ</span>
                        </div>
                        </div>
                        ';
            }
        ?>
    </div>
</div>