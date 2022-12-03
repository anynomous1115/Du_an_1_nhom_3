<style>
    .artical{
        margin-left: 180px ;
    }
    .box-title {
        margin-top: 200px;
        color: #40afe2;
        padding: 10px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        font-size: 36px;
        margin-bottom: 24px;
    }

    .cart td {
        width: 200px;
        text-align: center;
        background-color: #FFFFFF;
    }

    .cart {
        border-spacing: 0;
        border-collapse: collapse;
    }

    .cart th {
        width: 167px;
        background-color: #49577A;
        color: #FFFFFF;
        height: 40px;
        font-size: 18px;
    }
</style>
</div>
<div class="artical">
    <div class="box-title">Lịch sử đặt phòng</div>
    <table class="cart" border="1">
        <tr>
            <th>Tên phòng</th>
            <th>Hình ảnh phòng</th>
            <th>Ngày đặt phòng</th>
            <th>Ngày thuê</th>
            <th>Ngày trả</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        foreach ($list as $cart) {
            extract($cart);
            $hinhpath = "model/content/img/" . $img;
            $img = "<img src='" . $hinhpath . "' width='200px'>";
            echo '<tr>
                <td>' . $room_name . '</td>
                <td>' . $img . '</td>
                <td>'.$booking_date.'</td>
                <td>' . $start_date . '</td>
                <td>' . $end_date . '</td>
                <td>' . $into_money . 'VND</td>
            </tr>';
        }
        ?>
    </table>

</div>