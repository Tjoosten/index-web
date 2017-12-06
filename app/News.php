<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;
use Spatie\Translatable\HasTranslations;

class News extends Model implements HasMediaConversions
{
    use HasTranslations, HasMediaTrait;

    protected $fillable = ['publish_date', 'title', 'message', 'author_id'];

    public $translatable = ['title', 'categories', 'message'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb-image')
            ->width(750)
            ->height(300)
            ->optimize();
    }
}
