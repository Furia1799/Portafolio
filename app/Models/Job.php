<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
