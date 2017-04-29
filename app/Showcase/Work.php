<?php

namespace App\Showcase;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'showcase_work';


    /**
     * Get user that owned the work.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
