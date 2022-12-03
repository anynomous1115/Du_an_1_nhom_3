<?php
session_start();
include "../model/dao/pdo.php";
include "../model/dao/feedback.php";
$room_id = $_REQUEST['room_id'];
$feedback = feedback_select_by_room($room_id);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="box">
    <div class="box-title">
        BÌNH LUẬN
    </div>
    <div class="box-content">
        <h3>Nội dung bình luận ở đây</h3>
        <table>
            <?php
            foreach ($feedback as $dsbl) {
                extract($dsbl);
                echo '<tr class="bl"><td id="nd"><li>' . $content . '</li></td>';
                echo '<td><i>' . $full_name . ',</i></td>';
                echo '<td>' . $feedback_date . '</td></tr>';
            }
            ?>
        </table>
        <?php
        if (isset($_SESSION['user']['user_id'])) {
             $user_id = $_SESSION['user']['user_id'] ;
            ?>
        <div class="binhluanform">
        <form action="<?=$_SERVER['PHP_SELF']; ?>"method="post" >
            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
            <input type="hidden" name="room_id" value="<?php echo $room_id?>">
            <input type="text" name="content" >
            <?php
            /*for ($i = 1; $i <4 ; $i++){
                echo '<i class="fa-solid fa-star" id="start'.$i.'"></i>';
                echo '<script>
                    $(document).ready(function(){
                $("#start'.$i.'").click(function(){
                $("#start'.$i.'").css({"color": "rgb(255, 213, 0)"})
                   });
                    });
                     </script>';
            }
            $y = 3;
            for ($i = 1; $i <6-$y ; $i++){
                echo '<i class="fa-regular fa-star" id="start'.$i.'"></i>';
            }*/
            ?>
            <input type="submit" name="guibinhluan" value="Gửi phản hồi ">
        </form>
        </div>

        <?php }
        elseif (isset($_SESSION['user']['ma_nv'])){
            echo '<div id="kbl">Bạn không được bình luận</div>';
        }
        else {
            echo '<div id="kbl">Bạn phải đăng nhập để bình luận</div>';
        }
        ?>

        <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['content'];
            $ma_hh = $_POST['user_id'];
            $ngaybl = date('Y/m/d');
            $ma_kh = $_POST['room_id'];
            feedback_insert($noidung,$ma_hh, $ma_kh,$ngaybl);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</div>

