<div class="banner">
    <h1>DANH SÁCH LOẠI PHÒNG</h1>
</div>
<table border="1">
    <tr>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Ảnh loại phòng</th>
        <th>Số người</th>
        <th>Số giường</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($list_type_room as $typeroom) {
        extract($typeroom);
        $hinhpath = "../model/content/img/" . $img_type;
        if (is_file($hinhpath)) {
            $img = "<img src='" . $hinhpath . "' width='150px'>";
        } else {
            $img = "";
        }
        $suadm = "index.php?act=suadm&type_id=" . $type_id;
        $xoadm = "index.php?act=xoadm&type_id=" . $type_id;
        echo '<tr>
                <td>' . $type_id . '</td>
                <td>' . $type_name . '</td>
                <td>'.$img.'</td>
                <td>'.$max_people.'</td>
                <td>'.$max_bed.'</td>
                <td><a href="' . $suadm . '"><input type="button" value="Sửa" class="btn-sua"></a>
                <a href="' . $xoadm . '"> <input type="button" value="Xóa"  class="btn-xoa"></a>
                </td>
            </tr>';
    }
    ?>
</table>

<a href="index.php?act=add_type_room"><input type="button" value="Nhập thêm"></a>
