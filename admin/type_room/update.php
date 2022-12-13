<?php
if (is_array($dm)) {
    extract($dm);
}
$hinhpath = "../model/content/img/" . $img_type;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' width='500px'>";
} else {
    $img = "";
}
?>
<div class="banner">
    <h1>CẬP NHẬT LOẠI PHÒNG</h1>
</div>
<form action="index.php?act=add_type_room" method="POST" enctype="multipart/form-data" name="forms" id="form-2">

    <div class="formk">
        <label for="">Tên loại</label> <br>
        <input type="text" name="type_name" id="type_name" value="<?= $type_name ?>">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Hình ảnh</label> <br>
        <input type="file" name="img_type" id="img_type">
        <p class="form-message"></p>
        <?= $img ?>
    </div>
    <div class="formk">
        <label for="">Số người</label> <br>
        <input type="number" min=1 name="max_people" id="max_people" value="<?= $max_people ?>">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Số giường</label> <br>
        <input type="number" min=1 name="max_bed" id="max_bed" value="<?= $max_bed ?>">
        <p class="form-message"></p>
    </div>
    <div>
        <input type="submit" name="update" value="Cập nhật">
        <a href="index.php?act=list_type_room"><input type="button" value="Danh sách"></a>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo '<p id="tb">' . $thongbao . '</p>';
        ?>
    </div>
</form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-2',
            formGroupSelector: '.formk',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#type_name', 'Vui lòng nhập tên loại phòng'),
                Validator.isRequired('#img_type', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#max_people', 'Vui lòng số người'),
                Validator.isRequired('#max_bed', 'Vui lòng nhập số giường'),
            ]
        });
    });
</script>
</body>

</html>