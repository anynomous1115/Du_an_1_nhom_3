<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="apple-touch-icon" href="">
    <style>
        header {
            margin-top: 50px;
            text-align: center;
        }

        .welcome {
            text-align: center;
            margin-top: 50px;
            color: #2D3748;
            font-weight: 600;
            font-size: 16px;
        }
        .form-message{
            color: red;
        }
        .create {
            text-align: center;
            color: #1A202C;
            font-weight: bold;
            font-size: 32px;
            margin-top: 16px;
            margin-bottom: 30px;
        }

        .forms {
            display: grid;
            grid-template-columns: 380px 380px;
            grid-gap: 36px;

        }

        .formk {
            margin-top: 12px;
            margin-bottom: 12px;
            color: #4A5568;
            font-size: 16px;
            font-weight: 600;
        }

        .all {
            width: 800px;
            margin-left: 240px;
            gap: 24px;
        }

        .formk input {
            margin-top: 11px;
            width: 400px;
            height: 50px;
            border-radius: 5px;
            border: 1px solid #37A9CD;
            padding: 17px 0px 17px 17px;
        }

        input[type=radio] {
            width: 16px;
            margin-top: 5px;
            margin-left: 16px;
            height: 16px;
        }

        .button {
            text-align: center;
            margin: 8px  0px;
        }
        .button a{
            text-decoration: none;
            color: #37A9CD;
        }
        .button button {
            width: 400px;
            height: 50px;
            background-color: #37A9CD;
            color: #FFFFFF;
            font-size: 18px;
            font-weight: 600;
            border: 1px solid #37A9CD;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logos">
                <img src="https://www.brandbucket.com/sites/default/files/logo_uploads/315001/large_hoteliq.png" alt="">
            </div>
        </header>
        <main>
            <div class="all">
                <div class="welcome">
                    Welcome to HOTELIQ
                </div>
                <div class="create">Create Account</div>
                <form action="index.php?act=dangki" class="forms" method="POST" name="frm" id="form-1">
                    <div class="formk">
                        <label for="">Full name</label> <br>
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
                        <input type="text" placeholder="John.snow" name="username" id="username">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for=" ">Mật khẩu</label> <br>
                        <input type="text" placeholder="********" name="password" id="password">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for=" ">Nhập lại mật khẩu</label> <br>
                        <input type="text" placeholder="********" id="password_confirmation" >
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Giới tính </label> <br><br>
                        Nam<input type="radio" name="gender" value="Nam">
                        Nữ<input type="radio" name="gender" value="Nữ">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Quốc tịch</label> <br>
                        <input type="text" name="nationality" id="nationality">
                        <p class="form-message"></p>
                    </div>
                    <input type="text" name="role" hidden value="1">
            </div>
            <div class="button">
                <button type="submit">Tạo tài khoản</button>
            </div>
            <div class="button">
            Bạn đã có tài khoản <a href="index.php?act=dangnhap">đăng nhập</a> ngay
            </div>
            </form>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
          form: '#form-1',
          formGroupSelector: '.formk',
          errorSelector: '.form-message',
          rules: [
            Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#CCCD_id', 'Vui lòng nhập số căn cước công dân'),
            Validator.isRequired('#address', 'Vui lòng nhập địa chỉ'),
            Validator.isRequired('#username', 'Vui lòng nhập tên tài khoản'),
            Validator.isRequired('#birth_date', 'Vui lòng nhập ngày sinh'),
            Validator.isRequired('#phone_number', 'Vui lòng nhập số điện thoại'),
            Validator.isRequired('#password_confirmation'),
            Validator.isRequired('#nationality', 'Vui lòng nhập quốc tịch'),
            Validator.isConfirmed('#password_confirmation', function () {
              return document.querySelector('#form-1 #password').value;
            }, 'Mật khẩu nhập lại không chính xác')
          ]
        });
      });
        
    </script>
</body>

</html>