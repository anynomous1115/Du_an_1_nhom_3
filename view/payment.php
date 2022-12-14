<?php
$hinh = $hinhpath . $img;
?>
<style>
    .formk input {
        margin-left: -35px;
    }
    #top{
        border-bottom: 2px solid #EBEAEB;
    }
    .all{
        border-bottom: 2px solid #EBEAEB;
        margin: 15px 0px;
        padding: 5px 0px 10px 0px;
    }
</style>
<section class="payment">
    <div class="container">
        <div class="pay_content row">
            <div class="pay_content_left">
                <div class="pay_content_left_method_payment">
                    <p>Phương thức thanh toán</p>
                    <p id="top">Mọi giao dịch được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không được lưu lại.</p>
                    <div class="all">
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio" id="atm">
                            <label for="">Chuyển khoản ngân hàng</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_img">
                            <p class="atm" style="display: none;">Bạn vui lòng chuyển khoản đến số tài khoản 096714921 MB Bank</p>
                            <p class="atm" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê <?= $room_name ?> </p>
                        </div>
                    </div>
                    <div class="all">
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio" id="qr">
                            <label for="">Thanh toán qua mã QR</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_imgi">
                            <img src="model/content/img/qr.jpg" alt="" class="qr" style="display: none;">
                            <p class="qr" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê <?= $room_name ?> </p>
                        </div>
                    </div>
                    <div class="all">
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio" id="momo">
                            <label for="">Thanh toán qua MOMO</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_imgi">
                            <img src="model/content/img/momoqr.jpg" alt="" class="momo" style="display: none;">
                            <p class="momo" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê <?= $room_name ?> </p>
                        </div>
                    </div>
                    <div class="all">
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio" id="zalo">
                            <label for="">Thanh toán qua ZaloPay</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_imgi">
                            <img src="model/content/img/zalo.jpg" alt="" class="zalo" style="display: none;">
                            <p class="zalo" style="display: none;">Nội dung chuyển khoản là : Trả tiền thuê <?= $room_name ?> </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="pay_content_right">


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
                <form action="index.php?act=thanhtoan" method="POST" id="myform">
                    <input type="text" name="total_money" value="<?= $total_money ?>" hidden>
                    <input type="text" name="room_id" value="<?= $_POST['room_id'] ?>" hidden>
                    <input type="text" name="start_date" value="<?= $start_date ?>" hidden>
                    <input type="text" name="end_date" value="<?= $end_date ?>" hidden>
                    <input type="text" name="booking_date" value="<?= $booking_date ?> " hidden><br>
                    <div class="formk">
                        <input type="checkbox" id="element1" value="0"><label for="">Tôi đã thanh toán</label> <br>
                        <p class="form-message"></p>
                    </div>
                    <button type="submit">Xác nhận</button>
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
            $(".zalo").css("display", "none");
            $(".momo").css("display", "none");
        });
        $("#atm").click(function() {
            $(".atm").css("display", "block");
            $(".qr").css("display", "none");
            $(".zalo").css("display", "none");
            $(".momo").css("display", "none");
        });
        $("#zalo").click(function() {
            $(".qr").css("display", "none");
            $(".atm").css("display", "none");
            $(".zalo").css("display", "block");
            $(".momo").css("display", "none");
        });
        $("#momo").click(function() {
            $(".qr").css("display", "none");
            $(".atm").css("display", "none");
            $(".zalo").css("display", "none");
            $(".momo").css("display", "block");
        });
        $("#element1").click(function() {
            if ($("#element1").prop("checked") == true) {
                $("#element1").val(1);
            } else {
                $("#element1").val("");
            }
        });

    });
    document.addEventListener('DOMContentLoaded', function() {
        // Mong muốn của chúng ta
        Validator({
            form: '#myform',
            formGroupSelector: '.formk',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#element1', 'Vui lòng tích xác nhận'),
            ]
        });
    });
</script>