<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
