<?php
include "header.php";
include "../model/dao/pdo.php";
include "../model/dao/rooms.php";
include "../model/dao/booking.php.php";
include "../model/dao/loaiphong.php";
include "../model/dao/service.php";
include "../model/dao/user.php";
?>
        <article>
        <header>
      <?php
            session_start();//bắt đầu session
            if(isset($_SESSION["userName"])){ //kiểm tra xem trong session có tồn tại username hay không, nếu tồn tại thì hiển thị nội dung bên dưới
                echo $_SESSION["userName"]; //hiển thị username
                echo "<a href='./controller/logout.php'><button>Logout</button></a>"; //thẻ a điều hướng sang logout.php trong thư mục controller để xử lý việc logout
            }
        ?>
      </header>
            <main>
                <div class="banner">
                    Welcome to Dashboard
                </div>
            </main>
        </article>
    </div>

</body>

</html>