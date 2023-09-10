<?php

namespace App\Models;

use App\Traits\ImageUpload;
use Illuminate\Support\Facades\Cache;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class PageBlock extends \Pvtl\VoyagerPageBlocks\PageBlock
{
    use Translatable, Resizable, ImageUpload;

    public static function boot()
    {
        parent::boot();

        static::updated(function ($pageBlock) {
            if ($pageBlock->page) {
                $pageBlock->page->setUpdatedAt($pageBlock->page->freshTimestamp());
                $pageBlock->page->save(); /// Will trigger updated on the artwork model
            }
        });
    }

    /**
     * Get attributes that can be translated.
     *
     * @return array
     */
    public function getTranslatableAttributes()
    {
        $attrs = array_keys((new PageBlockMocked($this->data))->attributes);
        $del_vals = [
            'image',
            'bg_image',
            'image_bg',
            'photo',
            'photo_1',
            'photo_1_kz',
            'photo_1_ru',
            'photo_2',
            'images',
            'imageWebp',
            'link',
            'url',
            'animate'
        ];
        foreach ($attrs as $attr) {
            if (strpos($attr, 'image') !== false && strpos($attr, 'alt') === false && strpos($attr, 'image_text') === false) {
                unset($attrs[$attr]);
            }
        }

        foreach ($del_vals as $del_val) {
            if (($key = array_search($del_val, $attrs)) !== false) {
                unset($attrs[$key]);
            }
        }

        return property_exists($this, 'translatable') ? $this->translatable : $attrs;
    }

    public function getCachedDataAttribute()
    {
        return Cache::remember($this->cacheKey() . ':datum', $this->cache_ttl, function () {

            $data = $this->data;
            if ($attrs = $this->getTranslatableAttributes()) {
                foreach ($attrs as $attr) {
                    $translate_value = $this->getTranslatedAttribute($attr);
                    if (isset($data->{$attr}) && $translate_value)
                        $data->{$attr} = $translate_value;
                }
            }

            return $data;
        });
    }

}
