<div class="banner">
        <h1>
            CHI TIẾT ĐÁNH GIÁ <?php echo $items[0]['room_name'] ?>
        </h1>
</div>
        <table border="1">
            <tr>
                <th>NỘI DUNG</th>
                <th>NGÀY ĐÁNH GIÁ</th>
                <th>NGƯỜI ĐÁNH GIÁ</th>
                <th></th>
            </tr>
            <?php
            foreach ($items as $item) {
                extract($item);
                $xoa = "index.php?act=xoadg&feedback_id=".$feedback_id."&room_id=".$room_id;
                echo '
            <tr>
                <td>'.$content.'</td>
                <td>'.$feedback_date.'</td>
                <td>'.$full_name.'</td>
                <td><a href="'.$xoa.'"><input type="button" value="Xóa" class="btn-xoa"></a></td>
            </tr>
            ';
            }
            ?>
        </table>