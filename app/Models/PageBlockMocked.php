<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class PageBlockMocked extends Model
{
    use Translatable;

    protected $translatable = [];

    public function __construct($datem)
    {
        if (is_object($datem)) {
            $keys = [];
            foreach ($datem as $key => $data) {
                $this->$key = $data;
                if (strpos($key, 'image') !== false && strpos($key, 'alt') === false && strpos($key, 'image_text') === false) {
                    if (strpos($data, 'svg') !== false) {
                        $this->$key = \Voyager::image($data);
                    } else {
                        if ($this->isJson($data)) {
                            $imgs = json_decode($data);
                            $originals = [];
                            $webps = [];
                            foreach ($imgs as $img) {
                                $originals[] = \Voyager::image($img);
                                $webps[] = \Storage::exists('public/'.$img) ? str_replace('.' . pathinfo(\Voyager::image($img), PATHINFO_EXTENSION), '.webp', \Voyager::image($img)) : "#";
                            }
                            $this->$key = json_encode($originals);
                            $this->{$key . 'Webp'} = json_encode($webps);
                        } else {
                            $this->$key = \Voyager::image($data);
                            $this->{$key . 'Webp'} = \Storage::exists('public/'.$data) ? str_replace('.' . pathinfo(\Voyager::image($data), PATHINFO_EXTENSION), '.webp', \Voyager::image($data)) : "#";
                        }
                    }
                }
                if (!in_array($key, ['animate', 'cache_ttl', 'is_delete_denied', 'order', 'is_minimized', 'is_hidden', 'path', 'type', 'page_id']))
                    array_push($keys, $key);

            }
            $this->translatable = $keys;
        } else {
            parent::__construct();
        }

    }

    public function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    public function getKey()
    {
        return $this->id ? $this->id : '';
    }

    function get_field_translations($model, $field, $rowType = '', $stripHtmlTags = false)
    {
        $_out = $this->get_translations_of($model, $field);
        if ($stripHtmlTags && $rowType == 'rich_text_box') {
            foreach ($_out as $language => $value) {
                $_out[$language] = strip_tags($_out[$language]);
            }
        }
        return json_encode($_out);
    }

    function get_translations_of($model, $attribute, array $languages = null, $fallback = true)
    {
        if (is_null($languages)) {
            $languages = config('voyager.multilingual.locales', [config('voyager.multilingual.default')]);
        }
        $response = [];
        foreach ($languages as $language) {
            $response[$language] = $this->get_translated_attribute($model, $attribute, $language, $fallback);
        }
        return $response;
    }

    function get_translated_attribute($model, $attribute, $lang, $fallback)
    {
        if ((strpos($attribute, 'image') === false) || strpos($attribute, 'alt') !== false || strpos($attribute, 'image_text') !== false){
            $transQuery = \Voyager::model('Translation')->where('table_name', 'page_blocks')
                ->where('column_name', $attribute)
                ->where('foreign_key', $model->id)
                ->where('locale', $lang)->first();
            if ($transQuery) {
                return $transQuery->value;
            }
            return $this->$attribute;
        }
        return $this->$attribute;
    }

}
