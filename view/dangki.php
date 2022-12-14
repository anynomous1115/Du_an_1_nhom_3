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

        .form-message {
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
            margin: 8px 0px;
        }

        .button a {
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
                        <label for="">H??? v?? T??n</label> <br>
                        <input type="text" placeholder="John.snow" name="fullname" id="fullname">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Email </label> <br>
                        <input type="text" placeholder="John.snow@gmail.com" name="email" id="email">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">S??? ??i???n tho???i</label> <br>
                        <input type="text" name="phone_number" id="phone_number">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">?????a ch???</label> <br>
                        <input type="text" name="address" id="address">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">S??? C??n C?????c C??ng D??n </label> <br>
                        <input type="text" name="CCCD_id" id="CCCD_id">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Ng??y sinh</label> <br>
                        <input type="date" name="birth_date" id="birth_date">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">T??n t??i kho???n</label> <br>
                        <input type="text" placeholder="John.snow" name="user_name" id="username">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for=" ">M???t kh???u</label> <br>
                        <input type="text" placeholder="********" name="password" id="password">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for=" ">Nh???p l???i m???t kh???u</label> <br>
                        <input type="text" placeholder="********" id="password_confirmation">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Gi???i t??nh </label> <br><br>
                        Nam<input type="radio" name="gender" value="Nam" checked>
                        N???<input type="radio" name="gender" value="N???">
                        <p class="form-message"></p>
                    </div>
                    <div class="formk">
                        <label for="">Qu???c t???ch</label> <br>
                        <input type="text" name="nationality" id="nationality">
                        <p class="form-message"></p>
                    </div>
                    <input type="text" name="role" hidden value="2">
            </div>
            <div class="button">
                <button type="submit">T???o t??i kho???n</button>
            </div>
            <div class="button">
                B???n ???? c?? t??i kho???n <a href="index.php?act=dangnhap">????ng nh???p</a> ngay
            </div>
            </form>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong mu???n c???a ch??ng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.formk',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#fullname', 'Vui l??ng nh???p t??n ?????y ????? c???a b???n'),
                    Validator.isEmail('#email'),
                    Validator.minLength('#password', 8),
                    Validator.isRequired('#CCCD_id', 'Vui l??ng nh???p s??? c??n c?????c c??ng d??n'),
                    Validator.minLength('#CCCD_id', 12),
                    Validator.isRequired('#address', 'Vui l??ng nh???p ?????a ch???'),
                    Validator.isRequired('#username', 'Vui l??ng nh???p t??n t??i kho???n'),
                    Validator.isRequired('#birth_date', 'Vui l??ng nh???p ng??y sinh'),
                    Validator.isRequired('#phone_number', 'Vui l??ng nh???p s??? ??i???n tho???i'),
                    Validator.minLength('#phone_number', 10),
                    Validator.isRequired('#password_confirmation'),
                    Validator.isRequired('#nationality', 'Vui l??ng nh???p qu???c t???ch'),
                    Validator.isConfirmed('#password_confirmation', function() {
                        return document.querySelector('#form-1 #password').value;
                    }, 'M???t kh???u nh???p l???i kh??ng ch??nh x??c')
                ]
            });
        });
    </script>
</body>

</html>