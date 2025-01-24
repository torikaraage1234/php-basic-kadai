<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <p>
    <?php
      $associative_array = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
      
      foreach ($associative_array as $key => $val) {
        echo "{$key}：{$val}<br>";
      }
    ?>
  </p>
  
</body>
</html>