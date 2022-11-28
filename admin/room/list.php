<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div>
    <h1>QUẢN LÝ PHÒNG</h1>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>TÊN KHÁCH HÀNG</th>
            <th>TÊN PHÒNG</th>
            <th>NGÀY THUÊ</th>
            <th>NGÀY TRẢ</th>
            <th>TIỀN</th>
            <th>TRẠNG THÁI</th>
        </tr>
        <?php
        foreach ($thongke as $phong) {
            extract($phong);
            $checkout = "index.php?act=deletebooking&booking_detail_id=" . $booking_detail_id;
            echo '
        <tr>
        <td>' . $booking_detail_id . '</td>
        <td>' . $full_name . '</td>
        <td>' . $room_name . '</td>
        <td>' . $start_date . '</td>
        <td>' . $end_date . '</td>
        <td>' . $into_money . '</td>
        <td><input id="checkin'.$booking_detail_id.'"type="button" value="Check In">
                <a href="' . $checkout . '" id="checkout'.$booking_detail_id.'"><input type="button" value="Check Out"></a>
        </td>
        </tr>
        <style>
        #checkout'.$booking_detail_id.'{
            display: none;
        }
        </style>
        <script>
            $(document).ready(function(){
               $("#checkin'.$booking_detail_id.'").click(function(){
                $("#checkout'.$booking_detail_id.'").show();
                $("#checkin'.$booking_detail_id.'").hide();
               })
            });
        </script>
        '
        ;
        }
        ?>
    </table>
</div>
        
        
