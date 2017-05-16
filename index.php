<?php include 'function/header.php' ; ?>

	<!--ヘッダー(タイトル・その説明文)-->
	<header class="title_head">
		<h1 class="headTitle">どっちがドゥーユーライク</h1>
		<p class="headText">君は何が好きなんだ。</p>
	</header>
	<!--/-->

	<!--投票カード部分-->
	<section class="card">
		<!--左側-->
		<div class="poll_decision">
			<img class="card-img" src="images/きのこの山.jpg" alt="">
			<div class="card-content">
				<h1 class="card-title">きのこの山</h1>
				<p class="card-text">みんな大好き。ビスケット部分が秀逸。</p>
			</div>
			<div class="good_btn">
				<form action="function/insert.php" method="post">
					<input type="submit" class="popup1" value="&#xf184;">
					<input type="hidden" class="popup1" name="selected" value="1">
				</form>
			</div>
		</div>
		<!--/-->

		<!--右側-->
		<div class="poll_decision">

			<img class="card-img" src="images/たけのこの里.jpg" alt="">
			<div class="card-content">
				<h1 class="card-title">たけのこの里</h1>
				<p class="card-text">固い。とても子ども向けとは思えないお菓子。</p>
			</div>
			<div class="good_btn">
				<form action="function/insert.php" method="post">
					<input type="submit" class="popup1" value="&#xf184;">
					<input type="hidden" class="popup2" name="selected" value="2">
				</form>
			</div>
		</div>
		<!--/-->

	</section>
	<!--/-->

	<!--モーダルウィンドウ-->
	<div id="modalContent">
		<p>こちらでよろしいですか？</p>
		<p><a id="goClose" class="btnLink">ファイナルアンサー</a></p>
	</div>
	<p><a id="modalOpen" class="btnLink">オープン</a></p>
	<!--/-->

	<?php

    // データベース接続
    require "function/connection.php";

	//データ取得
	$data = $pdo->query("SELECT * FROM poll WHERE id = 1");
	while($row = $data->fetch(PDO::FETCH_ASSOC)){
		$poll_left = $row['item1_id'];
		$poll_right = $row['item2_id'];
		$poll_id = $row['id'];
	}
	$data = $pdo->query('SELECT * FROM item WHERE id = '.$poll_left);
	while($row = $data->fetch(PDO::FETCH_ASSOC)){
		$item_1 = $row;
	}

	$data = $pdo->query('SELECT * FROM item WHERE id = '.$poll_right);
	while($row = $data->fetch(PDO::FETCH_ASSOC)){
		$item_2 = $row;
	}
    ?>
</body>
</html>
