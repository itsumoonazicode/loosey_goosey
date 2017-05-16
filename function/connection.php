<?php
    // データ接続
    try {
        $pdo = new PDO(
            'mysql:host=localhost; dbname=social_network; charset=utf8',
            'social_network',
            '',
            array(
                PDO::ATTR_EMULATE_PREPARES => false
            )
        );
    } catch(PDOException $e){
        exit('データベース接続失敗。'.$e->getMessage());
    }
 ?>