<?php
    if(is_array($one_room)){
        extract($one_room); 
    }
    $hinhpath = "../model/content/img/".$img;
    if(is_file($hinhpath)){
     $img = "<img src='".$hinhpath."' width='25%'>";
    } else {
     $img = "";
    }
?>
<div class="banner">
            <h1>CẬP NHẬT PHÒNG</h1>
        </div>
        <form action="index.php?act=update_room" method="POST" enctype="multipart/form-data" name="forms" onsubmit="return validatehh()">
            <select name="type_id">
                <?php foreach ($list_type_room as $danhmuc) {
                    if ($danhmuc['type_id'] == $type_id) {
                        echo ' <option selected value="' . $danhmuc['type_id'] . '" >' . $danhmuc['type_name'] . '</option>';
                    } else {
                        echo ' <option value="' . $danhmuc['type_id'] . '">' . $danhmuc['type_name'] . '</option>';
                    }
                } ?>
            </select>
            <br>
            Tên phòng
            <br>
            <input type="text" name="room_name" value="<?=$room_name?>">
            <br>
            Giá phòng
            <br>
            <input type="number" name="room_price" value="<?=$room_price?>">
            <br>
            Số người
            <br>
            <input type="number" name="room_people" value="<?=$room_people?>">
            <br>
            Hình
            <br>
            <input type="file" name="img"><?=$img?> 
            <br>
            Mô tả
            <br>
            <textarea name="description" cols="30" rows="10"><?=$description?></textarea>
            <br>
            <input type="hidden" name="room_id" value="<?=$room_id?>">
            <br>
            <input type="submit"  value="Cập nhật" name="update">

            <a href="index.php?act=list_room"><input type="button" value="Danh sách"></a>
        </form>
    </div>
</body>
</html>