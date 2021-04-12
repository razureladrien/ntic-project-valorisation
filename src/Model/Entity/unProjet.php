<?php

namespace App\Model\Entity;

class unProjet extends Entity
{
  protected $_accessible = {
    '*' => true,
    'id' => false,
    'slug' => false
  };
}
