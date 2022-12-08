<?php
session_start();
include "../model/dao/pdo.php";
include "../model/dao/feedback.php";
$room_id = $_REQUEST['room_id'];
$feedback = feedback_select_by_room($room_id);
?>
<style>
    #front {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #86B817;
        margin: 0px 0px 32px 0;
        padding: 0;
    }
    .box-title{
        color: #4790CE;
        font-size: 24px;
    }

    hr {
        border-top: 1px solid #DDDDDD;
    }

    .danhgia {
        display: grid;
        grid-template-columns: 500px 700px;
        grid-template-rows: 28px;
        padding: 24px 0 30px 0;
    }

    label {
        font-weight: bolder;
    }

    #nd {
        font-size: 20px;
        color: #86B817;
    }
    #text{
        margin-top: 48px;
        width: 600px;
        height: 150px;
        margin-bottom: 32px;
    }
    #nut{
        width: 100px;
        height: 40px;
        border-radius: 5px;
        color: #FFFFFF;
        background-color: #86B817;
        border: 1px solid #86B817;
        font-size: 15px;
        font-weight: bold;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="box">
    <div class="box-title">
        ĐÁNH GIÁ CỦA KHÁCH HÀNG VỀ KHÁCH SẠN
        <hr id="front">
    </div>
    <div class="box-content">
        <?php
        foreach ($feedback as $dsbl) {
            extract($dsbl);
            echo '<div class = "danhgia">';
            echo '<label>' . $full_name . '</label>';
            echo '<p id="nd">' . $content . '</p>';
            echo '<i>' . $feedback_date . '</i>';
            echo '</div>';
            echo '<hr>';
        }
        ?>
        <?php
        if (isset($_SESSION['user']['user_id'])) {
            $user = $_SESSION['user']['user_id'];
            $list_user_id = user_feedback($room_id);
            $list = [];
            foreach($list_user_id as $id){
                extract($id);
                array_push($list, $user_id);
            }
            if(in_array($user, $list, true)){
        ?>
            <div class="binhluanform">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                    <input type="hidden" name="room_id" value="<?php echo $room_id ?>">
                    <textarea name="content" id="text" ></textarea><br>
                    <input type="submit" name="guibinhluan" value="Gửi phản hồi " id="nut">
                </form>
            </div>

        <?php }}
        ?>

        <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['content'];
            $ma_hh = $_POST['user_id'];
            $ngaybl = date('Y/m/d');
            $ma_kh = $_POST['room_id'];
            feedback_insert($noidung, $ma_hh, $ma_kh, $ngaybl);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</div>