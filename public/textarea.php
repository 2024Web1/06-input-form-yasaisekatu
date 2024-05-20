<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textarea.php</title>
</head>

<body>
  <h4></h4>
  <p>入力された文章は、つぎのとおりです。</p>
  <?php
  echo '<p>' . $_POST['input_text'] . '</p>';
  ?>
  <a href='textarea.html'>戻る</a>
</body>

</html>