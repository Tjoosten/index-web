<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;
use Spatie\Translatable\HasTranslations;

/**
 * Class News
 *
 * @package App
 */
class News extends Model implements HasMediaConversions
{
    use HasTranslations, HasMediaTrait;


    /**
     * Determine which fields are used in mass-assign methods.
     *
     * @var array
     */
    protected $fillable = ['publish_date', 'title', 'message', 'author_id'];

    /**
     * Translation fields for the database table.
     *
     * @var array
     */
    public $translatable = ['title', 'categories', 'message'];

    /**
     * The author data relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Register the conversions to the image asset.
     *
     * @param  Media|null $media The media conversion properties.
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb-image')
            ->width(750)
            ->height(300)
            ->optimize();
    }
}
