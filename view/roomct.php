<?php
extract($one_room);
$hinh = $hinhpath . $img;
$listsv = room_service($type_id);
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
if (isset($_SESSION['user'])) {
    $booking_room = "index.php?act=booking&&room_id=" . $room_id . "&&checkin=" . $checkin . "&&checkout=" . $checkout;
} else {
    $booking_room = "index.php?act=dangnhap&&chuadangnhap=1";
}
?>
<section class="product">
    <div class="container">
        <div class="product-top">
            Chi tiết phòng:
        </div>
        

        <?php
        echo    '<div class="product-content row">
                <div class="product-content-left row">
    <div class="product-content-left-big-img">
        <img src="' . $hinh . '" alt="">
    </div>';
        ?>
        <div class="product-content-left-small-img">
            <?php
            foreach($list_img as $room_image){
                extract($room_image);
                $img = $hinhpath.$room_img;
                echo '<img src="'.$img.'" alt="">';
            }
            ?>
            
            <!-- <img src="model/content/img/sp1.png" alt="">
            <img src="model/content/img/sp2.png" alt="">
            <img src="model/content/img/sp6.png" alt="">
            <img src="model/content/img/sp5.png" alt="">
            <img src="model/content/img/sp7.png" alt=""> -->
        </div>
    </div>
 
    <?php echo '

                <div class="product-content-right">   
                 <div class="product-content-right-name">
                        <h1>' . $room_name . '</h1>
                               
                    </div>';
                    foreach ($list_type as $type) {
                        if ($type['type_id'] == $type_id) {
                            echo  '<p style="margin-left: 10px;">Loại phòng:  '. $type['type_name'] . '</p> ';
                        }
                    }
                    echo '            
                           <div class="product-content-right-icon row">
                        <div class="product-content-right-icon-item">
                        <i class="fa-solid fa-person"></i> <p>' . $max_people . ' người</p> 
                        </div>
                    </div>

                    <div class="product-content-right-price">
                        <p>' . $room_price . '<sup>đ</sup>/đêm</p>
                    </div>
                    <div class="product-content-right-descroom">
                        <p>' . $description . '</p>
                    </div>
                    <div class="product-content-right-button">';
                    if(isset($checkin)&&isset($checkout)){
                    echo ' <a href="' . $booking_room . '"><button><i class="fa-solid fa-cart-flatbed-suitcase"></i> <p>Đặt phòng</p></button></a>  
                                   
                        <button><p>Đặt tại khách sạn</p></button>';
                    }else if(isset($_SESSION['user'])&&$_SESSION['user']['role']==0){
                         echo '<b>Admin không được đặt phòng</b>';
                    }else{
                        echo '<b>Bạn muốn đặt phòng vui lòng quay lại trang chủ tìm kiếm ngày</b>'; 
                    }
                    echo '</div>
                    <div class="product-content-right-tiennghi row">';
    foreach ($listsv as $service) {
        extract($service);
        echo '<div class="product-content-right-tn-item">
                        <i class="fa-solid fa-check"></i> ' . $service_name . '</p>
                        </div>
                         ';
    } ?>
    </div>
    </div>
    </div>
    </div>

</section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#danhgia").load("view/feedback.php", {room_id: <?=$room_id ?>});
            });
        </script>
        <article id="danhgia">
        </article>
<section class="product-related">
    <div class="product-related-title">
        <p>Các phòng khác liên quan</p>
    </div>
    <div class="product-content row">
        <?php
        $sql = "SELECT room_id FROM booking_detail WHERE '" . $checkin . "' >= start_date and '" . $checkin . "' <= end_date and '" . $checkout . "' >= start_date and '" . $checkout . "'<= end_date OR '" . $checkin . "' <= start_date and '" . $checkin . "' <= end_date and '" . $checkout . "' > start_date and '" . $checkout . "' <= end_date or '" . $checkin . "' >= start_date and '" . $checkin . "' < end_date and '" . $checkout . "' >= start_date and '" . $checkout . "'>=end_date OR '" . $checkin . "' <= start_date and '" . $checkin . "' <= end_date and '" . $checkout . "' >= start_date and '" . $checkout . "' >= end_date";
        $id = pdo_query($sql);
        if (empty($id)) {
            $room  = room_relate_getinfos($type_id, $room_id);
        } else {
            $sql = "select * from rooms where type_id=" . $type_id . " and room_id !=" . $room_id . "";
            foreach ($id as $kid) {
                extract($kid);
                $sql =  $sql . " and room_id != " . $room_id . "";
            }
            $room = pdo_query($sql);
        }
        foreach ($room as $roomct) {
            extract($roomct);
            $hinhs = $hinhpath . $img;
            if(isset($checkin)&&isset($checkout)){
                $link_room = "index.php?act=roomct&&room_id=" . $room_id . "&&checkin=" . $checkin . "&&checkout=" . $checkout;
            }else{
                $link_room = "index.php?act=roomct&&room_id=" . $room_id ;
            }
            echo '        <div class="product-relate-items">
    <a href="' . $link_room . '"><img src="' . $hinhs . '" alt=""></a>
    <h1>' . $room_name . '</h1>
    <p>' . $room_price . '<sup>đ</sup></p>
</div> ';
        }
        ?>
    </div>
</section>
</div>