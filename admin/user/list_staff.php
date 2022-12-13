<div class="banner">
    <h1>DANH SÁCH NHÂN VIÊN </h1>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="index.php?act=xoakh" method="POST">
<table border="1">
    <tr>
        <th>STT</th>
        <th>Tên Nhân Viên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Số CCCD</th>
        <th>Ngày sinh</th>
        <th>Email</th>
        <th>Giới tính</th>
        <th>Quốc tịch</th>
        <th>Thao tác</th>
    </tr>
    
    <?php
    $i = 1;
    foreach ($list_user as $user) {
        extract($user);
        $xoa_user= "index.php?act=xoakh&user_id=". $user_id;
        echo '
        <tr>
                <td>'.$i.'</td>
                <td>' . $full_name . '</td>
                <td>' . $phone_number . '</td>
                <td>' . $address . '</td>
                <td>' . $CCCD_id . '</td>
                <td>' . $birth_date . ' </td>
                <td>' . $email . ' </td>
                <td>' . $gender . ' </td>
                <td>' . $nationality . ' </td>
                <td>
                <a href="' . $xoa_user . '"> <input type="button" value="Xóa" class = "btn-xoa"></a>
                </td>
            </tr>';
            $i = $i + 1;
                
    }
    ?>
</table>
<a href="index.php?act=add_staff"><input type="button" value="Nhập thêm"></a>
</form>

