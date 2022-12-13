<div class="banner">
    <h1>THÊM MỚI PHÒNG</h1>
</div>
<form action="index.php?act=add_room" method="POST" enctype="multipart/form-data" name="forms" id="form-2">
    <div class="formk">
        <label for="">Tên phòng</label> <br>
        <input type="text" name="room_name" id="room_name">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Hình</label> <br>
        <input type="file" name="img" id="img" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Mô tả</label> <br>
        <textarea name="description" cols="30" rows="10" id="description"></textarea>
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Giá phòng</label> <br>
        <input type="number" name="room_price" id="room_price" min="0">
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
    <div class="formk">
        <label for="">Hình ảnh chi tiết</label> <br>
        <input type="file" name="img1" id="img1" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <input type="file" name="img2" id="img2" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <input type="file" name="img3" id="img3" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <input type="file" name="img4" id="img4" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <input type="file" name="img5" id="img5" accept=".jpg,.png">
        <p class="form-message"></p>
    </div>
    <div>
        <input type="submit" value="Thêm mới">

        <input type="reset" value="Nhập lại">

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
                Validator.isRequired('#img', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#img1', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#img2', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#img3', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#img4', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#img5', 'Vui lòng chọn ảnh'),
                Validator.isRequired('#description', 'Vui lòng mô tả'),
                Validator.isRequired('#room_price', 'Vui lòng nhập giá phòng'),
            ]
        });
    });
</script>

</body>

</html>