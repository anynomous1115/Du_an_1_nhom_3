<div class="banner">
            <h1>THÊM MỚI PHÒNG</h1>
        </div>
        <form action="index.php?act=add_room" method="POST" enctype="multipart/form-data" name="forms" onsubmit="return validatehh()">
            Mã phòng
            <br>
            <input type="text" name="room_id" disabled>
            <br>
            Tên phòng
            <br>
            <input type="text" name="room_name">
            <br>
            <p id="loiten" class="loi"></p>
            <br>
            Hình
            <br>
            <input type="file" name="img" > 
            <br>
            <p id="loihinh"class="loi"></p>
            Mô tả
            <br>
            <textarea name="description" cols="30" rows="10"></textarea>
            <br>
            <p id="loimota"class="loi"></p>
            Giá phòng
            <br>
            <input type="number" name="room_price" min="0">
            <br>
            <p id="loimota"class="loi"></p>
            Số người
            <br>
            <input type="number" name="room_people" min="0">
            <br>
            <p id="loixem"class="loi"></p>
            Mã loại
            <br>
            <select name="type_id" class="danhmuc">
                <?php foreach ($list_type_room as $danhmuc) {
                    extract($danhmuc);
                    echo ' <option value="'.$type_id.'">'.$type_name.'</option>';
                } ?>
            </select><br>
             
            <input type="submit"  value="Thêm mới">

            <input type="reset" value="Nhập lại">

            <a href="index.php?act=list_room"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao) && ($thongbao!="")) echo '<p id="tb">'.$thongbao.'</p>';
            ?>
        </form>
    </div>
</body>
</html>