<?php

namespace App\Traits;

use App\Helpers\Common;

trait ImageUpload
{

    public function getWebpFormat(string $attribute)
    {
        return Common::getWebpFormat($this, $attribute);
    }

}
