<?php include 'header.php' ; ?>
        <div id="result_content">
            <div class="result_images">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-thumbs-down" aria-hidden="true"></i>
            </div>
            <div class="result_count">
                <?php require_once 'insert.php' ; ?>
                <h1><?php echo $get_result_left ; ?></h1>
                <p><?php echo $get_result_right ; ?></p>
            </div>
        </div>
    </body>
</html>