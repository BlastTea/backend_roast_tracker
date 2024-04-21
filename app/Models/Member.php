<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'role'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
