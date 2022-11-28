<?php
session_start();
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
?>
<body>
<div class="contaner">
        <div class="book_conntent row">
            <div class="book_conntent_left">
                <div class="book_conntent_left_text">
                    <h2>Thông tin liên hệ</h2>
                </div>
                <div class="book_conntent_left_wrap">
                    <div class="book_conntent_left_tt">
                    <form action="">
        <label for="">Ngày nhận phòng:</label>
        <input type="date" name="ngaynhanphong">
        <br>
        <input type="date" name="">
        <br>
        <label for="">Ngày trả phòng:</label>
        <input type="date" name="ngaytraphong">
        <br>
        <input type="date">
        <br>
        <label for="">SĐT:</label>
        <input type="text" name="">
        <br>
        <input type="text" name="" class="input_booking">
        <br>
        SĐT
        <br>
        <input type="text" name="" class="input_booking">
        <br>
        Email
        <br>
        <input type="text" name="" class="input_booking">
        <br>
        Ghi chú
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
                 </form>
          </div>
        </div>
            </div>
            <div class="book_conntent_right">
            <div class="book_conntent_right_text">
                    <h2>Thông tin phòng</h2>
            </div>
            <div class="book_conntent_right_hotel row">
                <div class="book_conntent_right_hotel_imgae">
                   <img src="model/content/img/sp5.png" alt="">
                </div>
                <div class="book_conntent_right_hotel_list">
                    <a href=""><p>Room P1</p></a>
                    <i class="fa fa-thumbs-up"></i><a href="#"> 32 Đánh giá</a>
                </div>
            </div>
            <div class="book_conntent_right_details">
                <div class="book_conntent_right_details-checkinout row">
                <div class="book_conntent_right_details_left">
                    <span>NGÀY NHẬN PHÒNG</span><br>
                     <span>26 Thg11, 2022</span>
                </div>
                <div class="book_conntent_right_details_center">
                   <span><i class="fa-solid fa-clock"></i></span><br>
                  <span class="col-xs-12">2 đêm</span>
                </div>
                <div class="book_conntent_right_details_right">
                  <span>NGÀY TRẢ PHÒNG</span><br>
                  <span>28 Thg11, 2022</span>
                </div>
                </div>
                <div class="book_conntent_right_details_lisst">
                <span><b>1</b> phòng Suite Hướng Vườn Hồ Bơi Riêng (Garden Pool Suite) - Ăn sáng dành cho 2 người
                </span>
                </div>
            </div>
            <div class="books_content_right">
                <table>
                <tr>
                        <th colspan="2">Chi tiết giá phòng</th>
                    </tr>
                    <tr>
                        <td>Tổng tiền phòng</td>
                        <td><p>10000000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Tổng tiền</td>
                        <td><p class="dam">20000000<sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="books_content_right_tetx">
                    <p><a href="">Nhập mã giảm giá</a></p>
                </div>
               
                <div class="books_content_right_dangnhap">
                    <p>Tài khoản hotelIQ</p>
                    <p>hãy <a href="">Đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                  </div>
            </div>
            
            </div>
        
            <div class="books_content_right_text">
                    <input type="checkbox">Tôi đã đọc và chấp nhận các chính sách của khách sạn, điều khoản & điều kiện, và chính sách quyền riêng tư 
                    <div class="cart_content_right_button">
                    <button>Đặt phòng</button>
                  </div>
            </div>
            
            
 </div> 
</body>
<script src="./model/content/js/index.js"></script>
</html>

