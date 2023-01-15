<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

  <?php
  require_once('./Post.php');

  $POSTS_FILE_NAME = "posts.json";

  if (file_exists($POSTS_FILE_NAME)) {

    // Postクラスの配列を取得する（関数で取得するので、取得の処理は考えない）
    // $posts[] = PostReader::readPostsFromJso($JSON_FILE_NAME);
    $posts = readPostsFromJson($POSTS_FILE_NAME);

    // debug
    echo "-------------------------------<br>";
    print_r($posts);
    echo "<br>";
    echo "-------------------------------<br>";

    $message = "Read Posts from JSON file data.";
  } else {
    $message = "JSON file Not found.";
  }

  ?>

  <? if ($error_message) : ?>
    <h3 class='text-danger'><?= $message ?></h3>
  <? else : ?>
    <h3 class='text-success'><?= $message ?></h3>
    <?php foreach ($posts as $post) : ?>
      <div class='card'>
        <div class='dttm'> <?= $post->getDatetime(); ?> </div>
        <div class='post'> <?= $post->getPost(); ?> </div>
      </div>
    <?php endforeach; ?>
  <? endif; ?>



  <?php

  function readPostsFromJson($path)
  {
    print_r($path);

    $posts[0] = new Post('00万人突破するまで生配信！');
    $posts[1] = new Post('頼む！行かないでくれ！');
    $posts[2] = new Post('登録即解除とかしたらどうなるん');
    $posts[3] = new Post('お前らは大嫌いだろうけど素直に凄いわ');

    //data read from json file
    $data = file_get_contents($path);

    // debug
    echo "-------------------------------<br>";
    print_r($data);
    echo "<br>";
    echo "-------------------------------<br>";

    // decode a data
    $json = json_decode($data);
    // debug
    echo "-------------------------------<br>";
    print_r($json);
    echo "<br>";
    echo "-------------------------------<br>";

    foreach ($json as $post) {
      echo $post->datetime . "<br>";
      echo $post->post . "<br>";
      array_push($posts, new Post('00万人突破するまで生配信！'));
    }



    return $posts;
  }

  ?>

</body>

</html>