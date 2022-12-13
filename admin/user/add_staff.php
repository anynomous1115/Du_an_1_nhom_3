<div class="banner">
    <h1>THÊM MỚI NHÂN VIÊN</h1>
</div>
<form action="index.php?act=add_staff" class="forms" method="POST" name="frm" id="form-1">
    <div class="formk">
        <label for="">Họ và Tên</label> <br>
        <input type="text" placeholder="John.snow" name="fullname" id="fullname">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Email </label> <br>
        <input type="text" placeholder="John.snow@gmail.com" name="email" id="email">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Số điện thoại</label> <br>
        <input type="text" name="phone_number" id="phone_number">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Địa chỉ</label> <br>
        <input type="text" name="address" id="address">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Số Căn Cước Công Dân </label> <br>
        <input type="text" name="CCCD_id" id="CCCD_id">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Ngày sinh</label> <br>
        <input type="date" name="birth_date" id="birth_date">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Tên tài khoản</label> <br>
        <input type="text" placeholder="John.snow" name="user_name" id="username">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for=" ">Mật khẩu</label> <br>
        <input type="text" placeholder="********" name="password" id="password">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for=" ">Nhập lại mật khẩu</label> <br>
        <input type="text" placeholder="********" id="password_confirmation">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Giới tính </label> <br><br>
        Nam<input type="radio" name="gender" value="Nam" checked>
        Nữ<input type="radio" name="gender" value="Nữ">
        <p class="form-message"></p>
    </div>
    <div class="formk">
        <label for="">Quốc tịch</label> <br>
        <input type="text" name="nationality" id="nationality">
        <p class="form-message"></p>
    </div>
    <input type="text" name="role" hidden value="1">
    <div class="button">
        <button type="submit">Thêm nhân viên</button>
    </div>
</form>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.formk',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
                    Validator.isEmail('#email'),
                    Validator.minLength('#password', 8),
                    Validator.isRequired('#CCCD_id', 'Vui lòng nhập số căn cước công dân'),
                    Validator.minLength('#CCCD_id', 12),
                    Validator.isRequired('#address', 'Vui lòng nhập địa chỉ'),
                    Validator.isRequired('#username', 'Vui lòng nhập tên tài khoản'),
                    Validator.isRequired('#birth_date', 'Vui lòng nhập ngày sinh'),
                    Validator.isRequired('#phone_number', 'Vui lòng nhập số điện thoại'),
                    Validator.minLength('#phone_number', 10),
                    Validator.isRequired('#password_confirmation'),
                    Validator.isRequired('#nationality', 'Vui lòng nhập quốc tịch'),
                    Validator.isConfirmed('#password_confirmation', function() {
                        return document.querySelector('#form-1 #password').value;
                    }, 'Mật khẩu nhập lại không chính xác')
                ]
            });
        });
    </script>