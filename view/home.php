<?php

?>
<div id="home" class="title">
    <p>Book Your Vacation</p>
    <form action="index.php?act=search" method="POST">
        <div class="search_date">
            <div class="checkIn">
                <div class="label"><label for="inputEmail4">Ngày Bắt Đầu</label><br></div>
                <div class="input"><input type="date" id="startdateId" class="form-control" required name="checkIn"></div>
            </div>
            <div class="checkOut">
                <div class="label"><label for="inputEmail4">Ngày Kết Thúc</label><br></div>
                <div class="input"><input type="date" id="enddateId" class="form-control" required name="checkOut"></div>
            </div>
            <div class="saerch_btn">
                <div class="btn"><input type="submit" value="Book Now">
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<div class="content">
    <div id="about" class="aboutUs">
        <div class="text">
            <p><span>5<i class="fa-regular fa-star"></i></span> <span>25</span> <span style="font-size: 22px; font-weight: 400; margin-right: 12px; letter-spacing: 7px;">rooms</span></p>
            <p>Tọa lạc ở khu vực Trịnh Văn Bô, cách sân vận động Quốc gia Mỹ Đình, khách sạn IQ với 25 phòng
                nghỉ 5 sao và hệ thống phòng họp hiện đại luôn sẵn sàng phục vụ quý khách với đội ngũ nhân viên
                nhiệt tình và giàu kinh nghiệm. </p>
        </div>
        <div class="aboutUs_img">
            <img src="model/content/img/resort-swim.jpg" alt="">
        </div>
    </div>
    <img id="imgGroup" src="model/content/img/resort-group.png" alt="">
    <div id="room" class="room_type">
        <p>Room Class</p>
        <div class="room">
            <?php
            foreach ($list_type as $type) {
                extract($type);
                $hinh = $hinhpath . $img_type;
                echo '<div class="roomType_Id">
                        <a href=""><img src="' . $hinh . '"
                                alt=""></a>
                        <div class="infor">
                            <a href="">
                                <p id="name">Phòng ' . $type_name . '</p>
                            </a>
                            <i id="person" class="fa-solid fa-person"></i><span> ' . $max_people . ' Người lớn</span>
                            <i id="bed" class="fa-solid fa-bed"></i><span> ' . $max_bed . ' Giường đơn</span>
                            <div class="roomType_Id_btn"><a href="index.php?act=loai&&type_id=' . $type_id . '"><button type="submit">View <i class="fa-solid fa-angle-right"
                                        style="font-size: 20px;"></i></button></a></div>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
    <div id="service" class="service">
        <p>Hotel Facilities</p>
        <div class="service-1">
            <div class="service-1_asnh">
                <i class="fa-sharp fa-solid fa-square-parking"></i>
                <p>Bãi đỗ xe</p>
            </div>
            <div class="service-1_asnh">
                <i class="fa-solid fa-user-shield"></i>
                <p>Bảo mật</p>
            </div>
            <div class="service-1_asnh">
                <i class="fa-solid fa-water-ladder"></i>
                <p>Bể bơi</p>
            </div>
            <div class="service-1_asnh">
                <i class="fa-solid fa-spa"></i>
                <p>Spa</p>
            </div>
            <div class="service-1_asnh">
                <i class="fa-solid fa-dumbbell"></i>
                <p>Gym</p>
            </div>
            <div class="service-1_asnh">
                <i class="fa-solid fa-hand-sparkles"></i>
                <p>Dọn dẹp</p>
            </div>
        </div>
        <div class="service-2">
            <div class="service-2_asnh">
                <i class="fa-solid fa-wifi"></i>
                <p>Wifi free</p>
            </div>
            <div class="service-2_asnh">
                <i class="fa-solid fa-utensils"></i>
                <p>Ăn sáng</p>
            </div>
            <div class="service-2_asnh">
                <i class="fa-solid fa-ellipsis"></i>
            </div>
        </div>
    </div>
</div>
<script>
    var checkin = document.getElementById('startdateId');
    var checkout = document.getElementById('enddateId');
    var getcheckIn = new Array();
    var getcheckOut = new Array();
    var date = new Date();
    var day = date.getDate();
    var days = date.getDate()+ 1;
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var today = year + "-" + month + "-" + day;
    var todays = year + "-" + month + "-" + days;
    checkin.min = today;
    checkout.min = todays;
    checkin.onchange = function() {
        getcheckIn.push(checkin.value);
        var date = getcheckIn[getcheckIn.length - 1];
        checkout.min = date;
        console.log(getcheckIn[getcheckIn - 1]);
    }
    checkout.onchange = function() {
        getcheckOut.push(checkout.value);
        var date = getcheckOut[getcheckOut.length - 1];
        checkin.max = date;
        console.log(getcheckOut[getcheckOut.length - 1]);
    }
</script>