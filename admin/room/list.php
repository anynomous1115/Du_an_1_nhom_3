<div class="banner">
    <h1>DANH SÁCH PHÒNG</h1>
</div>
<form action="index.php?act=list_room" method="POST">
    <input type="text" style="width:200px" name="keyw">
    <select name="type_id">
        <option value="0" selected>Tất cả</option>
        <?php foreach ($list_type_room as $danhmuc) {
            extract($danhmuc);
            echo ' <option value="' . $type_id . '">' . $type_name . '</option>';
        } ?>
    </select>
    <input type="submit" name="list_search" value="Tìm">
</form>
<table border="1">
    <tr>
        <th></th>
        <th>Mã phòng</th>
        <th>Tên phòng</th>
        <th>Số người</th>
        <th>Hình</th>
        <th>Mô tả</th>
        <th>Giá phòng</th>
        <th></th>
    </tr>
    <?php foreach ($list_room as $room) {
        extract($room);
        $sua_room= "index.php?act=sua_room&room_id=" . $room_id;
        $xoa_room= "index.php?act=xoa_room&room_id=" . $room_id;
        $hinhpath = "../model/content/img/" . $img;
        if (is_file($hinhpath)) {
            $img = "<img src='" . $hinhpath . "' width='25%'>";
        } else {
            $img = "";
        }
        echo '<tr>
                <td><input type="checkbox"></td>
                <td>' . $room_id . '</td>
                <td>' . $room_name . '</td>
                <td>' . $room_people . '</td>
                <td>' . $img . '</td>
                <td>' . $description . '</td>
                <td>' . $room_price . ' VNĐ</td>
                <td><a href="' . $sua_room . '"><input type="button" value="Sửa"></a>
                <a href="' . $xoa_room . '"> <input type="button" value="Xóa"></a>
                </td>
            </tr>';
    }
    ?>
</table>

<input type="button" id="check-all" value="Chọn tất cả">
<input type="button" id="clear-all" value="Bỏ chọn tất cả">
<input type="button" value="Xóa các mục đã chọn">
<a href="index.php?act=add_room"><input type="button" value="Nhập thêm"></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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