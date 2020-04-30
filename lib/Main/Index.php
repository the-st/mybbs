<?php

namespace BBS\Main;

class Index extends \BBS\Main {
  public function load() {
    $stmt = $this->db->query("select * from posts");
    return $stmt->fetchAll();
  }
}
