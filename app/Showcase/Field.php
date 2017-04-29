<?php

namespace App\Showcase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Field extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'showcase_fields';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get all portfolio for the portfolio field.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function portfolios()
    {
        return $this->hasManyThrough(Portfolio::class);
    }

    /**
     * Get skills detail for the field category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
