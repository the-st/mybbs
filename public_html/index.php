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
  <link rel="stylesheet" href="css/styles.css">
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
    <h1>投稿一覧（<?= count($posts) ?>件）</h1>
    <?php if (!$posts) : ?>
      <section class="post">
        <div class="flex">
          <h2>まだ投稿はありません</h2>
          <p></p>
        </div>
        <p class="body">
          新しい投稿をしてみましょう
        </p>
        <p class="username">
        </p>
      </section>
    <?php else : ?>
      <?php foreach ($posts as $post) : ?>
        <section class="post">
          <div class="flex">
            <h2><?= h($post["title"]) ?></h2>
            <p><?= h($post["posted"]) ?></p>
          </div>
          <p class="body">
            <?= str_replace("\n", '<br>', h($post["body"])) ?>
          </p>
          <p class="username">
            <?= h($post["username"]) ?>
          </p>
        </section>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</body>
</html>
