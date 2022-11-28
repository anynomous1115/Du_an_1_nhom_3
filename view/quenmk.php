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

        .title {
            margin-top: 50px;
            text-align: center;
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

        .email {
            margin-top: 40px;
            color: #4A5568;
            font-size: 16px;
            font-weight: 600;
        }

        .all {
            width: 400px;
            margin-left: 440px;
        }

        .email input {
            margin-top: 11px;
            width: 400px;
            height: 50px;
            border-radius: 5px;
            border: 1px solid #37A9CD;
            margin-top: 11px;
            padding: 17px 0px 17px 17px;
        }

        .login button {
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
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="https://www.brandbucket.com/sites/default/files/logo_uploads/315001/large_hoteliq.png" alt="">
            </div>
        </header>
        <main>
            <div class="all">
                <div class="title">
                    <div class="welcome">Welcome back</div>
                    <h1 class="account">Reset Password</h1>
                </div>
                <form action="index.php?act=dangnhap" method="POST" name="frm" onsubmit="return validate()">
                    <div class="form">
                        <div class="email">
                            <p>Email</p>
                            <input type="email" required placeholder="John.snow@gmail.com" name="email">
                            <label for="" id="loiemail"></label>
                        </div>
                        <div class="login">
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
        function thongBaoLoi(element, msg) {
            document.getElementById(element).innerHTML = msg;
        }

        function validate() {
            const email = document.frm.email.value;
            const pass = document.frm.pass.value;
            var ok = true;
            var regEmail = /^\w+@\w+\.\w{2,5}$/;
            if (email == "") {
                thongBaoLoi("loiemail", "Email không được để trống");
                ok = false;
            } else if (!email.match(regEmail)) {
                thongBaoLoi("loiemail", "Email không đúng định dạng");
                ok = false;
            } else {
                thongBaoLoi("loiemail", "");
            }
            if (pass == "") {
                thongBaoLoi("loipass", "Password không được để trống");
                ok = false;
            } else if (pass.length < 8) {
                thongBaoLoi("loipass", "Password không được nhỏ hơn 8");
                ok = false;
            } else {
                thongBaoLoi("loipass", "");
            }
            if (ok == false) {
                return false;
            }
            if (ok == true) {
                alert("Đăng nhập thành công");
                return true;

            }
        }
    </script>
</body>

</html>