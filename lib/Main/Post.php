<?php

namespace BBS\Main;

class Post extends \BBS\Main {
  public function post($_title, $_username, $_body) {
    $stmt = $this->db->prepare('insert into posts (title, body, username, posted) values (:title, :body, :username, current_timestamp)');
    $stmt->execute([
      ':title' => $_title,
      ':body' => $_body,
      ':username' => $_username
    ]);
    header('Location: ' . SITE_URL . '/index.php');
  }
}
