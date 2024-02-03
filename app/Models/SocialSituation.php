<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialSituation extends Model
{
    
    protected $fillable = [
        'name_ar'
    ];

    public function getNameAttribute()
    {
        return $this->name_ar;
    }

}
