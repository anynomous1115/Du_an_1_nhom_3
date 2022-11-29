<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="model/content/css/stylex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Jost:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel=" stylesheet ">
    <link rel="stylesheet" href="model/content/css/font_icon/fontawesome-free-6.2.0-web/css/all.min.css">
<style>
    
</style>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="menu">
                <div class="logo">
                    <img src="model/content/image/e20501efe7e621b878f7.jpg" alt="">
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#room">Room</a></li>
                        <li><a href="#service">Service</a></li>
                    </ul>

                </div>
                <div class="login">
                    <?php 
                    if (isset($_SESSION['user'])) {
                        echo "<p>Xin chào " . $_SESSION['user']['full_name'] ."</p>";
                        echo '<a id="logOut" href= "index.php?act=dangxuat">Đăng xuất</a><br>';
                        if ($_SESSION['user']['role'] == 0) {
                            echo '<a id="logIn_admin" href="admin/index.php">Đăng nhập admin</a>';
                        }
                    } else {
                    ?>
                        <button><a href="index.php?act=dangnhap">Login</a></button>
                    <?php } ?>
                </div>
            </div>
            </form>
        </div>