<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pulldown.php</title>
</head>

<body>
    <?php

    // データベース接続
    $db = new mysqli("localhost", "username", "password", "database");

    // データ取得
    $sql = "SELECT * FROM mytable";
    $result = $db->query($sql);

    // プルダウンメニューの選択肢生成
    while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
    }

    // データベース接続を閉じる
    $db->close();

</body>

</html>