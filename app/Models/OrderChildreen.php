<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderChildreen extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "order_id",
        "name",
        "relative_relation",
        "id_number",
        "birth_date",
        "salary",
        "is_orphan",
    ];
}
