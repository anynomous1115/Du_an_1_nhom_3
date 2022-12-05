<?php
$room = room_select_by_id($_GET['room_id']);
extract($room);
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$first_date = strtotime($checkin);
$second_date = strtotime($checkout);
$datediff = abs($second_date - $first_date);
$sodem = floor($datediff / (60 * 60 * 24));
?>
<div class="contaner">
    <form action="index.php?act=bookingok" method="POST">
        <div class="book_conntent">
            <div class="book_conntent_left">
                <div class="book_conntent_left_text">
                    <h2>Thông tin liên hệ</h2>
                </div>
                <div class="book_conntent_left_wrap">
                    <div class="book_conntent_left_tt">
                        <div class="book_content_grid">
                        <label for="">Ngày nhận phòng:</label>
                        <input type="date" name="start_date" value="<?= $checkin ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">Số đêm:</label>
                        <input type="text" name="dem" value="<?= $sodem ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">Ngày trả phòng:</label>
                        <input type="date" name="end_date" value="<?= $checkout ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">Họ tên:</label>
                        <input type="text" name="" value="<?= $_SESSION['user']['full_name'] ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">SĐT:</label>
                        <input type="text" name="" value="<?= $_SESSION['user']['phone_number'] ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">Email:</label>
                        <input type="text" name="" value="<?= $_SESSION['user']['email'] ?>">
                        </div>
                        <div class="book_content_grid">
                        <label for="">Ghi chú:</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
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
                        <a href="">
                            <p>Room P1</p>
                        </a>
                        <i class="fa fa-thumbs-up"></i><a href="#"> 32 Đánh giá</a>
                    </div>
                </div>
                <div class="book_conntent_right_details">
                    <div class="book_conntent_right_details-checkinout row">
                        <div class="book_conntent_right_details_left">
                            <span>NGÀY NHẬN PHÒNG</span><br>
                            <span><?= $checkin ?></span>
                        </div>
                        <div class="book_conntent_right_details_center">
                            <span><i class="fa-solid fa-clock"></i></span><br>
                            <span class="col-xs-12"><?= $sodem ?> đêm</span>
                        </div>
                        <div class="book_conntent_right_details_right">
                            <span>NGÀY TRẢ PHÒNG</span><br>
                            <span><?= $checkout ?></span>
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
                            <td>Giá phòng</td>
                            <td>
                                <p><?= $room['room_price'] ?><sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Tổng tiền</td>
                            <td>
                                <p class="dam"><?= $room['room_price'] * $sodem ?><sup>đ</sup></p>
                            </td>
                        </tr>
                    </table>
                    <!-- <div class="books_content_right_tetx">
                        <p><a href="">Nhập mã giảm giá</a></p>
                    </div> -->

                    <!-- <div class="books_content_right_dangnhap">
                        <p>Tài khoản hotelIQ</p>
                        <p>hãy <a href="index.php?act=dangnhap">Đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                    </div> -->
                    <input type="text" value="<?= $room['room_price'] * $sodem ?>" name="total_money" hidden>
                    <input type="text" value="<?= $_GET['room_id']?>" name="room_id" hidden>
                </div>

            </div>

            <div class="books_content_right_text">
                <input type="checkbox" require>Tôi đã đọc và chấp nhận các chính sách của khách sạn, điều khoản & điều kiện, và chính sách quyền riêng tư
                <div class="cart_content_right_button">
                    <button type="submit">Đặt phòng</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>