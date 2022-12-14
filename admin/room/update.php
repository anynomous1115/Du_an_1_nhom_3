<?php
if (is_array($one_room)) {
    extract($one_room);
}
$hinhpath = "../model/content/img/" . $img;

if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' width='500px'>";
} else {
    $img = "";
}
?>
<div class="banner">
    <h1>CẬP NHẬT PHÒNG</h1>
</div>
<form action="index.php?act=update_room" method="POST" enctype="multipart/form-data" name="forms" id="form-2">
    <input type="text" hidden value="<?=$room_id?>" name="room_id">
    <div class="formk">
        <label for="">Tên phòng</label> <br>
        <input type="text" name="room_name" id="room_name" value="<?=$room_name?>">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Hình</label> <br>
        <input type="file" name="img" id="img" accept=".jpg,.png">
        <p class="form-message"></p>
        <?=$img?>
    </div>
    <div class="formk">
        <label for="">Mô tả</label> <br>
        <textarea name="description" cols="30" rows="10" id="description"><?=$description?></textarea>
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Giá phòng</label> <br>
        <input type="number" name="room_price" id="room_price" min="0" value="<?=$room_price?>">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for=""> Loại phòng</label> <br>
        <select name="type_id" class="danhmuc">
            <?php foreach ($list_type_room as $danhmuc) {
                extract($danhmuc);
                echo ' <option value="' . $type_id . '">' . $type_name . '</option>';
            } ?>
        </select><br>
    </div>
    <label for="">Hình ảnh chi tiết</label> <br>
        <?php
        $i = 1;
        foreach($list_img as $room_image){
            extract($room_image);
            $hinhpaths = "../model/content/img/" . $room_img;
            $room_imgs = "<img src='" . $hinhpaths . "' width='500px'>";
        echo '
        <div class="formk">
        <input type="file" name="img'.$i.'" id="img'.$i.'"accept=".jpg,.png" >
        <input type="text" name="img_id'.$i.'" value = "'.$room_image_id.'" hidden>
        <p class="form-message"></p>
        '.$room_imgs.'<br>
        </div>';
        $i = $i + 1;} 
        ?>

    <div>
        <input type="submit" value="Cập nhật">

        <a href="index.php?act=list_room"><input type="button" value="Danh sách"></a>
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
                Validator.isRequired('#room_name', 'Vui lòng nhập tên phòng'),
                
                Validator.isRequired('#description', 'Vui lòng mô tả'),
                Validator.isRequired('#room_price', 'Vui lòng nhập giá phòng'),
            ]
        });
    });
</script>

</body>

</html>