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
        <div class='dttm'> <?= $post->datetime; ?> </div>
        <div class='post'> <?= $post->post; ?> </div>
      </div>
    <?php endforeach; ?>
  <? endif; ?>

</body>

</html>