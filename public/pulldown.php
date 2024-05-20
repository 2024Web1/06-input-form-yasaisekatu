<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pulldown.php</title>
</head>



<body>
<?php
// 送信された値を取得
$fruit = $_POST['fruit'];

// 出力テキストを作成
$output = "<p>あなたの好きなフルーツは、{$fruit}ですね。</p>";

// 出力
echo $output;
?>
    <a href='pulldown.html'>戻る</a>
</body>

</html>