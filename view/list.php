<style>
    .artical {
        margin-left: 180px;
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

    .btn-sua {
        background-color: #00c853;
        color: #f9fbe7;
        border: 1px solid #00c853;
        width: 100px;
        height: 40px;
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
            <th>Trạng thái</th>
            <th></th>
        </tr>
        <?php
        foreach ($list as $cart) {
            extract($cart);
            $hinhpath = "model/content/img/" . $img;
            $img = "<img src='" . $hinhpath . "' width='200px'>";
            $xemlai = "index.php?act=roomct&&room_id=" . $room_id;
            echo '<tr>
                <td>' . $room_name . '</td>
                <td>' . $img . '</td>
                <td>' . $booking_date . '</td>
                <td>' . $start_date . '</td>
                <td>' . $end_date . '</td>
                <td>' . $into_money . 'VND</td>';
            if ($status == 0) {
                echo '<td> Đã thuê phòng
                    </td>';
            } else if ($status == 1) {
                echo '<td>Đang thuê phòng</td>';
            } else if ($status == 2) {
                echo '<td>Đang chờ nhận phòng</td>';
            } else if ($status == 3) {
                echo '<td>Đơn đặt phòng bị hủy</td>';
            } else if ($status == 4) {
                echo '<td>Đang chờ thanh toán</td>';
            }
            echo  '
            <td><a href="' . $xemlai . '"><input type="button" value="Xem lại" class="btn-sua"></a></td>
            </tr>';
        }
        ?>
    </table>

</div>