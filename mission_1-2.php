<?php
//ファイルを開く
//第１引数：ファイルのパス、第２引数：モード
//w+ の場合は既存の内容を上書きします
$filename = 'kadai2.txt';
$fp = fopen($filename, 'w');

//開いたファイルに1ずつ行書込む
fwrite($fp, 'テスト');

//ファイルを閉じる
fclose($fp);

?>
