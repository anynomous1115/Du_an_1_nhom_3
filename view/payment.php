<?php
$hinh = $hinhpath . $img;
?>
<section class="payment">
    <div class="container">
        <div class="pay_content row">
            <div class="pay_content_left">
                <div class="pay_content_left_method_payment">
                    <p>Phương thức thanh toán</p>
                    <p>Mọi giao dịch được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không được luu lại.</p>
                    <div class="pay_content_left_method_payment_items">
                        <input name="method_payment" type="radio">
                        <label for="">Thanh toán thẻ tín dụng (OnePay)</label>
                    </div>
                    <div class="pay_content_left_method_payment_items_img">
                        <img src="https://demo.goodlayers.com/hotale/resort/wp-content/plugins/tourmaster/images/visa.png" alt="">
                        <img src="https://demo.goodlayers.com/hotale/resort/wp-content/plugins/tourmaster/images/master-card.png" alt="">
                        <img src="https://demo.goodlayers.com/hotale/resort/wp-content/plugins/tourmaster/images/american-express.png" alt="">
                        <img src="https://demo.goodlayers.com/hotale/resort/wp-content/plugins/tourmaster/images/jcb.png" alt="">
                    </div>
                    <div class="pay_content_left_method_payment_items">
                        <input name="method_payment" type="radio" id="atm">
                        <label for="">Thanh toán thẻ ATM (OnePay)</label>
                    </div>
                    <div class="pay_content_left_method_payment_items_img">
                        <img src="model/content/img/vcb.jpg" alt="" class="atm" style="display: none;">
                        <p class="atm" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê Phòng <?= $room_name ?> </p>
                    </div>
                    <div class="pay_content_left_method_payment_items">
                        <input name="method_payment" type="radio" id="qr">
                        <label for="">Thanh toán qua mã QR</label>
                    </div>
                    <div class="pay_content_left_method_payment_items_imgi">
                        <img src="model/content/img/qr.jpg" alt="" class="qr" style="display: none;">
                        <p class="qr" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê Phòng <?= $room_name ?> </p>
                    </div>
                    <div class="pay_content_left_method_payment_items">
                        <input name="method_payment" type="radio">
                        <label for="">Thanh toán qua Momo</label>
                    </div>
                    <div class="pay_content_left_method_payment_items_imgi">
                        <img src="model/content/img/momo.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="pay_content_right">
                <div class="pay_content_right_button">
                    <input type="text" placeholder="Nhập mã giảm giá / Quà tặng">
                    <button><i class="fa-solid fa-check"></i></button>
                </div>
                <div class="pay_content_right_button">
                    <input type="text" placeholder="Quay lại chi tiết đặt phòng">
                    <button><i class="fa-solid fa-check"></i></button>
                </div>

                <div class="book_conntent_right_hotel row">
                    <div class="book_conntent_right_hotel_imgae">
                        <img src="<?= $hinh ?>" alt="">
                    </div>
                    <div class="book_conntent_right_hotel_list">
                        <a href="">
                            <p><?= $room_name ?></p>
                        </a>
                        <i class="fa fa-thumbs-up"></i><a href="#"> <?= $danhgia ?> Đánh giá</a>
                    </div>
                    <div class="book_conntent_right_hotel_texttt">
                        Tổng tiền khách hàng cần thanh toán : <?= $total_money ?><sup>đ</sup>
                    </div>
                </div>

            </div>
            <div class="cart_content_right_button">
                <button onclick="history.go(-2)">Tiếp tục xem phòng</button>
                <form action="index.php?act=thanhtoan" method="POST">
                    <input type="text" name="total_money" value="<?=$total_money?>" hidden>
                    <input type="text" name="room_id" value="<?=$_POST['room_id']?>" hidden>
                    <input type="text" name="start_date" value="<?=$start_date?>" hidden>
                    <input type="text" name="end_date" value="<?=$end_date?>" hidden>
                    <input type="text" name="booking_date" value="<?=$booking_date?> " hidden><br>
                    <input type="checkbox">      Tôi đã thanh toán<br>
                    <button type="submit">Thanh toán</button>
                </form>

            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#qr").click(function() {
            $(".qr").css("display", "block");
            $(".atm").css("display", "none");
        });
        $("#atm").click(function() {
            $(".atm").css("display", "block");
            $(".qr").css("display", "none");
        });
    });
</script>