<?php
extract($one_room);
$hinh = $hinhpath .$img;
$booking_room = "index.php?act=booking&room_id=".$room_id;
$checkin= $_GET['checkin'];
$checkout= $_GET['checkout'];
echo $checkin;
echo $checkout."<br>";
$d1=strtotime($checkin);
$d =strtotime($checkout);
$d2=ceil(($d-$d1)/60/60/24);
echo $d2;
?>
<script>
    
</script>
<body>
<input type="date" value="<?= $checkin ?>">
    <section class="product">
        <div class="container">
            <div class="product-top">
                Chi tiết phòng: 
            </div>
                <?php foreach ($list_type as $type) {
                    if ($type['type_id'] == $type_id) {
                  echo  '<p>Loại phòng: </p> <input type="text" value="' . $type['type_name'] . '" id="typeroom" disabled>';
                    }
                } 
                ?>
        
<?php
        echo    '<div class="product-content row">
                <div class="product-content-left row">
    <div class="product-content-left-big-img">
        <img src="'.$hinh.'" alt="">
    </div>
</div>

                <div class="product-content-right">
                    <div class="product-content-right-name">
                        <h1>'.$room_name.'</h1>
                        <p>P'.$room_id.'</p>         
                    </div>
                    <div class="product-content-right-icon row">
                        <div class="product-content-right-icon-item">
                        <i class="fa-solid fa-person"></i> <p>'.$room_people.'</p>
                        </div>
                    </div>

                    <div class="product-content-right-price">
                        <p>'.$room_price.'<sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-descroom">
                        <p>'.$description.'</p>
                    </div>
                    <div class="product-content-right-button">
                    <a href="'.$booking_room.'"><button><i class="fa-solid fa-cart-flatbed-suitcase"></i> <p>Đặt phòng</p></button></a>  
                                   
                        <button><p>Đặt tại khách sạn</p></button>
                    </div>';
                    ?>
                    <div class="product-content-right-tiennghi row">
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Bàn tiếp tân [24 giờ]</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Đưa đón sân bay</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Bãi để xe</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Wi-Fi miễn phí trong tất cả các phòng!</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Nhận/trả phòng [nhanh]</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Giữ hành lý</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Rút tiền mặt</p>
                        </div>
                        <div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> <p>Trạm sạc điện xe hơi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="product-related">
        <div class="product-related-title">
              <p>Các phòng khác liên quan</p>
        </div>
    <div class="product-content row">
        <div class="product-relate-items">
            <img src="../model/content/img/sp2.png" alt="">
            <h1>MOON West Lake</h1>
            <p>10.500.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-items">
            <img src="../model/content/img/sp2.png" alt="">
            <h1>MOON West Lake</h1>
            <p>10.500.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-items">
            <img src="../model/content/img/sp2.png" alt="">
            <h1>MOON West Lake</h1>
            <p>10.500.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-items">
            <img src="../model/content/img/sp2.png" alt="">
            <h1>MOON West Lake</h1>
            <p>10.500.000<sup>đ</sup></p>
        </div>
        <div class="product-relate-items">
            <img src="../model/content/img/sp2.png" alt="">
            <h1>MOON West Lake</h1>
            <p>10.500.000<sup>đ</sup></p>
        </div>
    </div>
    </section>
</body>
</html>
