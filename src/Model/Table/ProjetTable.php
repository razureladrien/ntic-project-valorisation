<?php

namespace App\Model\Table;

class ProjetTable.php extends Table
{
  public function initialize(array $config): void
  {
    $this->addBehavior('Timestamp');
  }
}
