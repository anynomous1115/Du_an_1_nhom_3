<div class="banner">
    <h1>DANH SÁCH LOẠI PHÒNG</h1>
</div>
<table border="1">
    <tr>
        <th></th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
    </tr>
    <?php foreach ($list_type_room as $typeroom) {
        extract($typeroom);
        $suadm = "index.php?act=suadm&type_id=" . $type_id;
        $xoadm = "index.php?act=xoadm&type_id=" . $type_id;
        echo '<tr>
                <td><input type="checkbox"></td>
                <td>' . $type_id . '</td>
                <td>' . $type_name . '</td>
                <td><a href="' . $suadm . '"><input type="button" value="Sửa" class="btn-sua"></a>
                <a href="' . $xoadm . '"> <input type="button" value="Xóa"  class="btn-xoa"></a>
                </td>
            </tr>';
    }
    ?>
</table>

<input type="button" id="check-all" value="Chọn tất cả">

<input type="button" id="clear-all" value="Bỏ chọn tất cả">
<input type="button" id="btn-delete" value="Xóa các mục đã chọn">
<a href="index.php?act=add_type_room"><input type="button" value="Nhập thêm"></a>
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