<?php

namespace App\Showcase;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'showcase_collaborators';


    /**
     * Get portfolio that owns the collaborator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    /**
     * Get registered user only that owns the portfolio (collaborator).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
