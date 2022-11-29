<div class="banner">
            <h1>THÊM MỚI LOẠI PHÒNG</h1>
        </div>
        <form action="index.php?act=add_type_room" method="POST" name="forms" onsubmit="return validateloai()">
            Mã loại
            <br>
            <input type="text" name="type_id" disabled>
            <br>
            Tên loại
            <br>
            <input type="text" name="type_name">
            <p class="loi" id="loitenloai"></p>
            <br>
             
            <input type="submit" name="btn-add" value="Thêm mới">

            <input type="reset" name="btn-retype" value="Nhập lại">

            <a href="index.php?act=list_type_room"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao) && ($thongbao!="")) echo '<p id="tb">'.$thongbao.'</p>';
            ?>
        </form>
    </div>
</body>
</html>