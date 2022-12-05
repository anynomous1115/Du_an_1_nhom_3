<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="banner">
    <h1>DANH SÁCH ĐẶT PHÒNG</h1>
</div>
<div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TÊN KHÁCH HÀNG</th>
            <th>TÊN PHÒNG</th>
            <th>NGÀY THUÊ</th>
            <th>NGÀY TRẢ</th>
            <th>TIỀN</th>
            <th>TRẠNG THÁI</th>
            <th>THAO TÁC</th>
        </tr>
        <?php
        foreach ($thongke as $phong) {
            extract($phong);
            $xoa_booking = "index.php?act=deletebooking&&booking_detail_id=" . $booking_detail_id;
            echo '
        <tr>
        <td>' . $booking_detail_id . '</td>
        <td>' . $full_name . '</td>
        <td>' . $room_name . '</td>
        <td>' . $start_date . '</td>
        <td>' . $end_date . '</td>
        <td>' . $into_money . '</td>';
        if($status == 0){
        echo '<td> Đã thuê phòng
        </td>';
        }else if($status == 1){
            echo '<td><a href="index.php?act=checkout&&booking_detail_id='.$booking_detail_id.'"><input type = "button" value = "Check Out" class="btn-xoa"></a></td>';
        }else if($status == 2){
            echo '<td><a href="index.php?act=checkin&&booking_detail_id='.$booking_detail_id.'"><input type = "button" value = "Check In" class="btn-sua"></a></td>';
        }else if($status == 3){
            echo '<td>Đơn đặt phòng bị hủy</td>';
        }else if($status == 4){
            echo '<td><a href="index.php?act=xacnhan&&booking_detail_id='.$booking_detail_id.'"><input type = "button" class="btn-sua" value = "Xác nhận"></a>
            <a href="index.php?act=huy&&booking_detail_id='.$booking_detail_id.'"><input  type = "button" value = "Hủy" class="btn-xoa"></a></td>';
        }
        echo '<td>
        <a href="' . $xoa_booking . '"> <input type="button" value="Xóa" class="btn-xoa"></a></td></tr>
        
        '
        ;
        }
        ?>
    </table>
</div>
        
        
