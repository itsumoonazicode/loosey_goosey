<?php include 'header.php' ; ?>

        <?php require_once 'insert.php' ; ?>
        <div id="result_content">
            <div class="result_images">
                <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            <div class="result_count">
                <p><?php echo $get_result_left ; ?></p>
                <h1><?php echo $get_result_right ; ?></h1>
            </div>
        </div>
    </body>
</html>