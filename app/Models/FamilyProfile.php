<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyProfile extends Model
{
    /** @use HasFactory<\Database\Factories\FamilyProfileFactory> */
    use HasFactory;
    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}