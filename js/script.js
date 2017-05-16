$(function(){
    $("#modalOpen").click(
        function(){
            //[id:modalOpen]をクリックしたら起こる処理

            //キーの操作などにより、オーバーレイが多重起動するのを防止する
            $(this).blur(); //ボタンからフォーカスを外す
            if($("#modalOverlay")[0]) return false; //新しくモーダルウィンドウを起動しない[下とどちらか選択]
            //if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;		//現在のモーダルウィンドウを削除して新しく起動する [上とどちらか選択]

            //オーバーレイ用のHTMLコードをbodyタグ内の最後に生成する
            $("body").append('<div id="modalOverlay"></div>');
            // ☆append:対象の要素内の最後に、指定したHTMLを追加する


            //[$modalOverlay]をフェードインさせる
            $("#modalOverlay").fadeIn("slow");

            //[$modalContent]をフェードインさせる
            $("#modalContent").fadeIn("slow");


            //センタリングをする関数
            function modalGoCenter(){

                //ウィンドウ幅を取得
                modalW = $(window).width();

                //ウィンドウの高さを取得
                modalH = $(window).height();

                //modalContentの幅を取得
                contentW = $("#modalContent").outerWidth({margin:true});

                //modalContentの高さを取得
                contentH = $("#modalContent").outerHeight({margin:true});

                //modalContentを真ん中に配置するために左端から何ピクセル離せばいいかの計算
                pxLeft = ((modalW - contentW)/2);

                //modalContentを真ん中に配置するために上部から何ピクセル離せばいいかの計算
                pxTop = ((modalH - contentH)/2);

                //pxLeftの値を設定
                $("#modalContent").css({"left": pxLeft + "px"});

                //pxTopの値を設定
                $("#modalContent").css({"top": pxTop + "px"});
            }

            $("#modalOverlay, #goClose").unbind().click(function(){
                //modalOverlayまたはgoCloseをクリックしたら起こる処理

                //[#modalOverlay]と[#goClose]をフェードアウトする
                $("#modalContent, #modalOverlay").fadeOut("slow",function(){
                //フェードアウト後、[#modalOverlay]をHTML上から削除
                $("#modalOverlay").remove();
                });
            });
        });
});

