<?php include 'header.php' ; ?>

    <?php
        // データベース接続
        require "connection.php";

    	//データを登録する
    	$pdo->query("INSERT INTO select_result(result, created, modified) VALUES (".$_POST['selected'].", NOW(), NOW());");

    	//データ取得
    	$data = $pdo->query("SELECT COUNT(id) AS cnt FROM select_result WHERE result = 1");
    	while($row = $data->fetch(PDO::FETCH_ASSOC)){
    		$get_result_left = $row['cnt'];
    	}
    	$data = $pdo->query("SELECT COUNT(id) AS cnt FROM select_result WHERE result = 2");
    	while($row = $data->fetch(PDO::FETCH_ASSOC)){
    		$get_result_right = $row['cnt'];
    	}
    ?>


    <!-- 得票数による処理 -->
    <?php if($get_result_left > $get_result_right || $get_result_left < $get_result_right) : ?>
        <?php include 'result.php' ; ?>
    <?php elseif($get_result_left == $get_result_right) : ?>
        <?php include 'result_draw.php' ; ?>
    <?php endif; ?>
</body>
</html>