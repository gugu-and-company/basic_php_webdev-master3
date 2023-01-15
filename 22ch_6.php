<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

  <?php
  // require_once('./Post.php');
  spl_autoload_register(function ($class) {
    require($class . '.php');
  });

  $POSTS_FILE_NAME = "posts.json";

  if (file_exists($POSTS_FILE_NAME)) {

    //data read from json file
    $data = file_get_contents($POSTS_FILE_NAME);

    // debug
    echo "-------------------------------<br>";
    print_r($data);
    echo "<br>";
    echo "-------------------------------<br>";

    // decode a data
    $posts = json_decode($data);

    // array format data printing
    echo "-------------------------------<br>";
    print_r($posts);
    echo "<br>";
    echo "-------------------------------<br>";

    $message = "<h3 class='text-success'>JSON file data</h3>";
  } else {

    $error_message = "<h3 class='text-danger'>JSON file Not found</h3>";
  }

  // 
  if ($error_message) {
    echo $error_message;
  }

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