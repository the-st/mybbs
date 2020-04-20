<?php
require_once(__DIR__ . '/../config/config.php');
$app = new BBS\Main\Index();
$posts = $app->load();
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>MyBBS</title>
</head>
<body>
  <nav>
    <a href="/" id="nav_home">MyBBS</a>
    <ul class="nav_links">
      <li><a href="/" class="nav_link">投稿一覧</a></li>
      <li><a href="form.php" class="nav_link">投稿フォーム</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>投稿一覧</h1>
    <?php foreach ($posts as $post) : ?>
      <section class="post">
        <div class="flex">
          <h2><?= $post["title"] ?></h2>
          <p><?= $post["posted"] ?></p>
        </div>
        <p>
          <?= $post["body"] ?>
        </p>
        <p>
          <?= $post["username"] ?>
        </p>
      </section>
    <?php endforeach ?>
  </div>
</body>
</html>
