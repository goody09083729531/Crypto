<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'meta_key',
        'meta_value',
    ];
}
