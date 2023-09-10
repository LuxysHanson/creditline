<?php

namespace App\Models;

class Translation extends \TCG\Voyager\Models\Translation
{

    /**
     * Set the base cache tags that will be present
     * on all queries.
     *
     * @return array
     */
    protected function getCacheBaseTags(): array
    {
        return [
            'translations_tag',
        ];
    }

}
