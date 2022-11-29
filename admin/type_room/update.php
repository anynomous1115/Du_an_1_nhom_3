<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="banner">
            <h1>CẬP NHẬT LOẠI PHÒNG</h1>
        </div>
        <form action="index.php?act=update_type_room" method="POST">
            Mã loại
            <br>
            <input type="text" name="type_id" disabled>
            <br>
            Tên loại
            <br>
            <input type="text" name="type_name" value="<?=$type_name?>">
            <br>
            <input type="hidden" name="type_id" value="<?=$type_id?>">
            <input type="submit" value="Cập nhật" name="update">

            <a href="index.php?act=list_type_room"><input type="button" value="Danh sách"></a>
        </form>
    </div>
</body>
</html>