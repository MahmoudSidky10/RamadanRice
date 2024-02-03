<?php

namespace App\Models\Triggers;

use Illuminate\Support\Facades\Auth;

trait UpdatedBy
{
    protected static function bootUpdatedBy()
    {
        static::updating(function ($model) {
            $model->updated_by = Auth::id() ? Auth::id() : null;
        });

        static::deleting(function ($model) { //<todo> Not updating on soft delete
            $model->updated_by = Auth::id() ? Auth::id() : null;
        });

    }
}

