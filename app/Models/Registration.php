<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use App\Enums\RegistrationStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = ['br_date'];

    public function getHumanStatusAttribute()
    {
        $statusDescription = RegistrationStatus::fromValue($this->status)->description;
        return $this->status == 'approved' ?
            $statusDescription . ' (' . PaymentMethod::fromValue($this->payment_method)->description . ')' :
            $statusDescription;
    }

    public function getBrDateAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
