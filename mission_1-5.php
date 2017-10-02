<?php
if (((isset($_POST["name"])) && ($_POST["name"] != ""))) {         // 名前かEmailがPOSTされたときに、以下を実行する

          if (isset($_POST["name"])) {	//もしPOSTに [name] があれば
                  $name = $_POST["name"];	//POSTのデータを変数$nameに格納
                 if( get_magic_quotes_gpc() ) { $name = stripslashes("$name"); } 		//クォートをエスケープする
                  $name = htmlspecialchars ($name); 	//HTMLタグを禁止する
                  $name = mb_substr ($name, 0, 30, 'UTF-8'); 		//長いデータを30文字でカット
         }

            $time = date("Y/n/j G:i"); 		//日時の取得
            $write = $time . ", ". $name . ", " . $email. ",". $yourID . "/";  	//新しく書き込むデータを <> で区切って整形
            $log = fopen ("kadai3.txt","w");  	 //書き込み用モードでデータを開く
            flock ($log, LOCK_EX); 	 //ファイルロック開始
            fputs ($log,$write);   	//書き込み処理
            flock ($log, LOCK_UN);  	  //ファイルロック解除
            fclose ($log); 		 //ファイルを閉じる
}
?>
