<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Page extends \TCG\Voyager\Models\Page
{
    use Translatable, HasFactory, Resizable;

    // Add relation to page blocks
    public function blocks()
    {
        return $this->hasMany(PageBlock::class,'page_id')->with('translations');
    }

    protected $translatable = ['title', 'seo_title', 'body','excerpt','meta_description','seo_title','meta_keywords'];

    protected $dates = ['created_at', 'updated_at'];

    public function getTemplate(): string
    {
        return $this->slug == '/' ? 'home' : 'page';
    }

}
