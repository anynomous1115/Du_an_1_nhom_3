<div class="content">
            <div class="overView">
                <div class="p">
                    <p>Tọa lạc ở khu vực Trịnh Văn Bô, cách sân vận động Quốc gia Mỹ Đình, khách sạn  IQ với 50 phòng nghỉ bốn sao và hệ thống phòng họp hiện đại luôn sẵn sàng phục vụ quý khách với đội ngũ nhân viên nhiệt tình và giàu kinh nghiệm.  Từ đây, Quý khách có thể dễ dàng tiếp cận được nét đẹp sống động của thành phố ở mọi góc cạnh. Khách sạn hiện đại này nằm trong khu lân cận với các địa điểm tham quan nổi tiếng của thành phố như Bảo tàng Không Quân Việt Nam, Viện Y Hà Nội, Ngã Tư Sở.</p>
                    <p>Hệ thống Nhà hàng, quán bar sang trọng cùng những dịch vụ thư giãn, giải trí đẳng cấp như spa, bể bơi trong nhà và phòng Karaoke sẽ đáp ứng yêu cầu của những khách hàng khó tính nhất. </p>
                    <p>Khách sạn IQ là sự kết hợp hài hoà giữa nền văn hóa miền Tây Bắc Việt Nam với sự sang trọng, hiện đại của châu Âu. Chính điều này đã tạo nên một khách sạn IQ hiện đại mà vẫn đậm đà nét truyền thống dân tộc ngay giữa lòng thành phố Hà Nội.</p>
                </div>
                <div class="addDress">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863855881391!2d105.74459841415754!3d21.038132792835867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668597168142!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="room">
                <p>Room class</p>
                <div class="roomGrid">
                    <?php 
                    foreach($loadroom as $room){
                        extract ($room);
                        $hinh = $hinhpath .$img;
                        $link_room = "index.php?act=roomct&room_id=".$room_id;

        echo '
        <div class="grid">
        <a href="'.$link_room.'"><img src="'.$hinh.'" alt=""></a>
        <p id="roomName">'.$room_name.'</p>
                        <div class="desc">
                            <p id="desc-1">37m<sup>2</sup></p>
                            <p id="desc-2">2 giường đơn</p>
                        </div>
                        <p id="price">Chỉ từ <span>'.$room_price.'</span> /đêm</p>
                        <div class="btn">
                            <button>Book</button>
                        </div>
                    </div>
        ';
                    }
                    
                    ?>
                 
                    <!-- <div class="grid">
                        <img src="./model/content/image/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv.jpg" alt="">
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
                        <img src="./model/content/image/3d-rendering-beautiful-comtemporary-luxury-bedroom-suite-hotel-with-tv.jpg" alt="">
                        <p id="roomName">Single Bedroom</p>
                        <div class="desc">
                            <p id="desc-1">37m<sup>2</sup></p>
                            <p id="desc-2">2 giường đơn</p>
                        </div>
                        <p id="price">Chỉ từ <span>1,512,000 VNĐ</span> /đêm</p>
                        <div class="btn">
                            <button>Book</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="p_Service">
                    <p>Service</p>
                </div>
                <div class="img_Slider">
                    <img src="./model/content/image/slider/img_1.jpg" id="image" alt="">
                    <div class="icon">
                        <div class="right" >
                            <i id="right" onclick="before()" class="icon_slider fa-solid fa-arrow-right"></i>
                        </div>
                        <div class="left">
                            <i id="left" onclick="after()" class="icon_slider fa-solid fa-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>