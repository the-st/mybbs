<?php
require_once(__DIR__ . '/../config/config.php');
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
      <li><a href="" class="nav_link">投稿フォーム</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>投稿フォーム</h1>
    <form action="processing.php" method="post">
      <p>件名： <input type="text" name="title" placeholder="件名"></p>
      <p>ユーザー名：<input type="text" name="username" placeholder="ユーザー名"></p>
      <p>本文<br><textarea name="body" placeholder="本文"></textarea></p>
    </form>
    <div id="btn">Submit!</div>
  </div>
  <script>
    'use strict';
    {
      const btn = document.getElementById('btn');
      const form = document.querySelector('form');

      btn.addEventListener('click', () => {
        form.submit();
      });
    }
  </script>
</body>
</html>
