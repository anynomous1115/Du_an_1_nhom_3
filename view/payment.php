<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../model/content/css/stylex.css">
    <link rel="stylesheet" href="../model/content/css/font_icon/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
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
                            <input checked name="method_payment" type="radio">
                            <label for="">Thanh toán thẻ ATM (OnePay)</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_img">
                            <img src="../model/content/img/vcb.jpg" alt="">
                        </div>
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio">
                            <label for="">Thanh toán qua mã QR</label>
                        </div>
                        <div class="pay_content_left_method_payment_items">
                            <input name="method_payment" type="radio">
                            <label for="">Thanh toán qua Momo</label>
                        </div>
                        <div class="pay_content_left_method_payment_items_imgi">
                            <img src="../model/content/img/momo.jpg" alt="">
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

                </div>
            </div>
        </div>
    </section>
</body>
</html>