<div class="banner">
        <h1>TỔNG HỢP ĐÁNH GIÁ</h1>
</div>        
        <table border="1">
            <tr>
                <th>TÊN PHÒNG</th>
                <th>SỐ ĐÁNH GIÁ</th>
                <th>MỚI NHẤT</th>
                <th>CŨ NHẤT</th>
                <th></th>
            </tr>
            <?php
                foreach ($listfb as $fb){
                extract($fb);
                $detail = "index.php?act=ctbl&room_id=".$room_id;
                echo '
                <tr>
                <td>'.$room_name.'</td>
                <td>'.$so_luong.'</td>
                <td>'.$cu_nhat.'</td>
                <td>'.$moi_nhat.'</td>
                <td><a href="'.$detail.'"><input type="button" value="Chi tiết" class="btn-sua"></a></td>
                </tr>
                ';

                }
            ?>
        </table>

    </div>