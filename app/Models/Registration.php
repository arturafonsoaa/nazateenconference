<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
