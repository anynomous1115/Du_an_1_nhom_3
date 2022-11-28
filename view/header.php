<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family = Anton & family = Inter: wght @ 100; 200; 300; 400; 500; 600; 700; 800; 900 & family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "
        rel=" stylesheet ">
    <link rel="stylesheet" href="./model/content/css/font_icon/fontawesome-free-6.2.0-web/css/all.min.css">
    <style>
        #typeroom{
            border: none;
            font-size: 24px;
        }
        .input_booking{
    margin-top: 15px;
    margin-bottom: 15px;
    width: 500px;
}
.btn-book button{
    width: 100px;
    margin-bottom: 20px;
    margin-top: 20px;
}
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <img src="./model/content/image/e20501efe7e621b878f7.jpg" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?act=room">Room</a></li>
                    <li><a href="">Address</a></li>
                </ul>

            </div>
            <div class="login">
                <button>Login</button>
            </div>
        </div>
        <div class="banner">
            <img src="./model/content/image/beautiful-luxury-outdoor-swimming-pool-hotel-resort.jpg" alt="">
        </div>
        <div class="search">
            <form action="index.php?act=search" method="POST">
            <div class="form" >
                <div class="checkIn">
                    <input type="date" name="checkIn" >
                </div>
                <div class="checkOut">
                    <input type="date" name = "checkOut" >
                </div>
                <div class="saerch_btn">
                    <a href="'index.php?act=search'"><input type="submit" value="Book Now"></a>
                </div>
            </div>
            </form>
        </div>
