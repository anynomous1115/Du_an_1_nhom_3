<body>
    
       <div class="content">
        <div class="title">
            <h1>Đặt phòng</h1>
        </div>
        <form action="">
        <table>
            <tr>
                <td>Chi tiết đặt phòng</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Loại phòng</td>
                <td>Số phòng</td>
                <td>Số người</td>
                <td></td>
            </tr>
            <tr>
                <td><select name="">
                    <?php foreach ($list_type as $loaiphong){
                        extract($loaiphong);
                        echo '<option value="'.$type_id.'">'.$type_name.'</option>';
                    }
                    ?>
                </select></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><button>Xóa</button></td>
            </tr>
        </table>
        Ngày đến
        <br>
        <input type="date" name="" id="">
        <br>
        Ngày đi
        <br>
        <input type="date">
        <br>
        <h3>
            Thông tin người đặt phòng
        </h3>
        Họ tên
        <br>
        <input type="text" name="">
        <br>
        SĐT
        <br>
        <input type="text" name="">
        <br>
        Email
        <br>
        <input type="text" name="">
        <br>
        Ghi chú
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
       <div class="btn-book">
        <button>Đặt phòng</button>
        </div>
        </form>
       </div>
        <div class="footer">
            <div class="footer-1">
                <p>Trụ sở: Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                <p>Email: caosonhai1410@gmail.com</p>
            </div>
            <div class="footer-2">
                <p>ĐIỀU KHOẢN & QUY ĐỊNH</p>
                <p>Điều khoản chung</p>
                <p>Quy định chung</p>
                <p>Quy định về thanh toán</p>
                <p>Quy định về xác nhận thông tin đặt phòng</p>
                <p>Chính sách giải quyết tranh chấp</p>
                <p>Chính sách quyền riêng tư</p>
            </div>
        </div>
    </div>
</body>
<script src="./model/content/js/index.js"></script>
</html>

