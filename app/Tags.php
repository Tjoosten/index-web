<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Tags\Tag;

/**
 * Class Tags
 *
 * @package App
 */
class Tags extends Tag
{
    /**
     * Velden waar translatie ondersteund moet zijn.
     *
     * @var array
     */
    public $translatable = ['name', 'slug', 'description'];

    /**
     * Get the author data in the relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
