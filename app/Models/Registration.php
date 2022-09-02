<?php

namespace App\Models;

use App\Enums\RegistrationStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function getHumanStatusAttribute()
    {
        return RegistrationStatus::fromValue($this->status)->description;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
