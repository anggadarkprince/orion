<?php

namespace App\Showcase;

use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'showcase_screenshots';


    /**
     * Get portfolio that owns the screenshot.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
