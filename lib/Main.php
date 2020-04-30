<?php

namespace BBS;

class Main {
  protected $db;

  public function __construct() {
    $this->db = new \PDO(DSN);
    $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
  }
}
