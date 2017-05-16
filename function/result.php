<?php include 'header.php' ; ?>
        <div id="result_content">
            <div class="result_images">
                <img class="images_win" src="http://localhost/public_html/loosey-goosey/images/きのこ_勝利.jpg" alt='勝った方'>
                <img class="images_lose" src="http://localhost/public_html/loosey-goosey/images/たけのこ_敗北.jpg" alt='負けた方'>
            </div>
            <div class="result_count">
                <?php require_once 'insert.php' ; ?>
                <h1><?php echo $get_result_left ; ?></h1>
                <p><?php echo $get_result_right ; ?></p>
            </div>
        </div>
    </body>
</html>