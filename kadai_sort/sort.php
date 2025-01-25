<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      function sort_2way ($array, bool $order) {
        if ($order) {
          //昇順 $order=true処理
          echo '昇順にソートします。' . '<br>';
          sort ($array);
        } else {
          //降順 $order=false処理
          echo '降順にソートします。' . '<br>';
          rsort ($array);
        }
        
        foreach ($array as $array) {
          echo $array . '<br>';
        }

      }

      $nums = [15, 4, 18, 23, 10 ];
      sort_2way($nums, true);
      sort_2way($nums, false);
    ?>
  </p>
  
</body>
</html>