<?php include 'header.php' ; ?>

        <?php require_once 'insert.php' ; ?>
        <div id="result_content">
            <div class="result_images">
                <img class="images_lose" src="http://localhost/public_html/loosey-goosey/images/きのこ_敗北.jpg" alt='負けた方'>
                <img class="images_win" src="http://localhost/public_html/loosey-goosey/images/たけのこ_勝利.jpg" alt='勝った方'>
            </div>
            <div class="result_count">
                <p><?php echo $get_result_left ; ?></p>
                <h1><?php echo $get_result_right ; ?></h1>
            </div>
        </div>
    </body>
</html>