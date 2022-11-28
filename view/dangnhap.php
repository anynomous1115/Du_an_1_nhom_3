<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1280px;
            margin: auto;
        }

        header {
            margin-top: 30px;
            text-align: center;
        }

        .titles {
            margin-top: 10px;
            text-align: center;
        }
        .logos{
            margin-top: 50px;
        }
        .welcome {
            color: #2D3748;
            font-weight: 600;
            font-size: 16px;
        }

        .account {
            color: #1A202C;
            font-weight: 900;
            font-size: 32px;
            margin-top: 16px;
        }
        .form-group {
            margin-top: 40px;
            color: #4A5568;
            font-size: 16px;
            font-weight: 600;
        }

        .all {
            width: 400px;
            margin-left: 440px;
        }

        .form-group input {
            margin-top: 11px;
            width: 400px;
            height: 50px;
            border-radius: 5px;
            border: 1px solid #37A9CD;
            margin-top: 11px;
            padding: 17px 0px 17px 17px;
        }

        .logins button {
            width: 400px;
            height: 50px;
            border-radius: 5px;
            border: 1px solid #37A9CD;
            background-color: #37A9CD;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: 600;
            margin-top: 30px;
        }

        .google button {
            color: #FFFFFF;
            background-color: #2D3748;
            width: 400px;
            height: 50px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 15px;
        }

        .forgot {
            text-align: center;
            color: #37A9CD;
            font-size: 18px;
            font-weight: 700;
            margin-top: 32px;
        }

        .join {
            text-align: center;
            margin-top: 16px;
            color: #4A5568;
            font-size: 18px;
            font-weight: 600;
        }
        .join a{
            color: #37A9CD;
            text-decoration: none;
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
                <div class="titles">
                    <div class="welcome">Welcome back</div>
                    <h1 class="account">Login to your account</h1>
                </div>
                <form action="index.php?act=dangnhap" method="POST" name="frm" id="form-2">
                    <div class="formk">
                        <div class="form-group">
                            <p>Email</p>
                            <input type="text" placeholder="John.snow@gmail.com" name="email" id="email">
                            <label for="" class="form-message"></label>
                        </div>
                        <div class="form-group">
                            <p>Mật khẩu</p>
                            <input type="text" placeholder="********" name="password" id="password">
                            <label for="" class="form-message"></label>
                        </div>
                        <div class="logins">
                            <button  type="submit">Đăng nhập ngay</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="forgot">Quên mật khẩu</div>
                        <div class="join">Bạn chưa có tài khoản <span class="forgot"><a href="index.php?act=dangki">Đăng kí ngay</a></span></div>
                    </div>
            </div>
            </form>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta

        Validator({
          form: '#form-2',
          formGroupSelector: '.form-group',
          errorSelector: '.form-message',
          rules: [
            Validator.isEmail('#email'),
            Validator.minLength('#password', 8),
          ]
        });
      });
    </script>
</body>

</html>