<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>
<style>
  .card {
    /* ポイント４ */
    width: calc((100% - 20px * 1) / 2);
    height: auto;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, .2);
    padding: 20px;
    margin: 40px;
  }

  .dttm {
    /* ポイント４ */
    width: calc((100% - 20px * 1) / 2);
    height: auto;
    border-radius: 8px;
    font-size: small;
  }

  .post {
    /* ポイント４ */
    width: calc((100% - 20px * 1) / 2);
    height: auto;
    border-radius: 8px;
    font-size: x-large;
  }
</style>

<body>

  <?php
  require_once('./Post.php');

  $posts[0] = new Post('00万人突破するまで生配信！');
  $posts[1] = new Post('頼む！行かないでくれ！');
  $posts[2] = new Post('登録即解除とかしたらどうなるん');
  $posts[3] = new Post('お前らは大嫌いだろうけど素直に凄いわ');

  for ($i = 0; $i <= count($posts) - 1; $i++) {
    echo "<div class='card'>";
    echo "<div class='dttm'>" . $posts[$i]->dttm . "</br></div>";
    echo "<dib class='post'>" . $posts[$i]->post . "</br>";
    echo "</div>";
  }
  ?>

</body>

</html>