<?php
if(isset($_GET['mk'])){
    echo'<script>alert("Email của bạn không có trên hệ thống, bạn vui lòng kiểm tra và thử lại")</script>';
}
?>
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

        .hi_title {
            margin-top: 50px;
            text-align: center;
        }

        .welcome {
            color: #2D3748;
            font-weight: 600;
            font-size: 16px;
        }
        .logos{
            margin-top: 70px;
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

        .reset button {
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
        .forgot {
            text-align: center;
            color: #37A9CD;
            font-size: 18px;
            font-weight: 700;
            margin-top: 32px;
        }
        .forgot  a{
            text-decoration: none;
            color: #37A9CD;
        }
        .forgot  a:hover{
            text-decoration: underline;
        }
        .join {
            text-align: center;
            margin-top: 16px;
            font-weight: 600;
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
                <div class="hi_title">
                    <div class="welcome">Welcome back</div>
                    <h1 class="account">Reset Password</h1>
                </div>
                <form action="index.php?act=return_mk" method="POST" name="frm" id="form-2">
                    <div class="form">
                        <div class="form-group">
                            <p>Email</p>
                            <input type="email" required placeholder="John.snow@gmail.com" id="email" name="email">
                            <label for="" class="form-message"></label>
                        </div>
                        <div class="reset">
                            <button>Reset password</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="join"><span class="forgot"><a href="index.php?act=dangnhap">Return login</a></span></div>
                    </div>
            </div>
            </form>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        Validator({
          form: '#form-2',
          formGroupSelector: '.form-group',
          errorSelector: '.form-message',
          rules: [
            Validator.isEmail('#email'),
          ]
        });
      });
    </script>
</body>

</html>