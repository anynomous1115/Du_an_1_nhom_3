<div class="banner">
    <h1>THỐNG KÊ</h1>
</div>
<table border="1">
    <tr>
        <th>Số phòng của khách sạn</th>
        <th>Số khách hàng đã đăng ký tài khoản</th>
        <th>Loại phòng được đặt nhiều nhất</th>
        <th>Tổng số tiền thuê phòng</th>
    </tr>
    <?php foreach ($thongke as $chitiet) {
        foreach($sum_money as $tong){
        extract($tong);
        extract($chitiet);
        echo '<tr>
                <td>' . $room_count. '</td>
                <td>' . $user_sigin. '</td>
                <td>'.$type_name.'</td>
                <td>'.$tong.'</td>
            </tr>';
        }}
    ?>
</table>