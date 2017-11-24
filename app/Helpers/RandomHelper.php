<?php

namespace App\Helpers;

class RandomHelper
{
   public function setRandomCode() {
        $this->code = rand(1000, 9999);
    }
}
 