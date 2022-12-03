<div class="banner">
    <h1>DANH SÁCH KHÁCH HÀNG </h1>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="index.php?act=xoakh" method="POST">
<table border="1">
    <tr>
        <th></th>
        <th>STT</th>
        <th>Tên Khách Hàng</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Số CCCD</th>
        <th>Ngày sinh</th>
        <th>Email</th>
        <th>Giới tính</th>
        <th>Quốc tịch</th>
        <th></th>
    </tr>
    
    <?php
    $i = 1;
    $checkbox = "'checkbox'";
    foreach ($list_user as $user) {
        extract($user);
        $xoa_user= "index.php?act=xoakh&user_id=". $user_id;
        echo '<input id="check'.$i.'" name = "user_id" type = "text" hidden>
        <tr>
                <td><input id="box'.$i.'" type="checkbox" ></td>
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
                <a href="' . $xoa_user . '"> <input type="button" value="Xóa"></a>
                </td>
            </tr>
            <script>
            $(document).ready(function () {
                $("#box'.$i.'").click(function(){
                  if($("#box'.$i.'").prop("checked") == true){
                    $("#check'.$i.'").val('.$user_id.');
                  }
                  else if($("#box'.$i.'").prop("checked") == false){
                    $("#check'.$i.'").val("");
                  }
               });
             });
            </script>
            ';
        $i = $i+1;    
    }
    ?>
</table>

<input type="button" id="check-all" value="Chọn tất cả">
<input type="button" id="clear-all" value="Bỏ chọn tất cả">
<input type="submit" value="Xóa các mục đã chọn">
</form>

<script>
    $(document).ready(function () {
        $("#check-all").click(function () {
            $(":checkbox").prop("checked", true);
        });
        $("#clear-all").click(function () {
            $(":checkbox").prop("checked", false);
        });
        $("#btn-delete").click(function () {
            if ($(":checked").length === 0) {
                alert("Vui lòng chọn ít nhất một mục!");
                return false;
            }
        });
        
    });
    
</script>