<?php

namespace App\Triggers;

use Illuminate\Support\Facades\Auth;

trait CreatedBy
{
    protected static function bootCreatedBy()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::id() ? Auth::id() : null;
        });
    }
}

