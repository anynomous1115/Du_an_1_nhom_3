<link rel="stylesheet" href="model/content/css/searchs.css">
<div class="title">
    <p><?=$type_name?></p>
</div>
</div>
<div class="room_search">
    <div class="rooms">
        <?php
            foreach ($loadroom_type as $room) {
                extract($room);
                $hinh = $hinhpath . $img;
                $link_room = "index.php?act=roomct&&room_id=".$room_id;
                echo '
                        <div class="roomId">
                         <div class="imgRoom"><a href="'.$link_room.'"><img src="' . $hinh . '" alt=""></a></div>
                         <div class="infor">
                           <a href="'.$link_room.'"><p id="name">' . $room_name . '</p></a>
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