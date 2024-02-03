<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status',
        'user_id',
        'created_by',
        'status_updated_at',
        "first_name",
        "parent_name",
        "grandfather_name",
        "family_name",
        "social_situation_id",
        "birth_date",
        "age",
        "salary",
        "nationality_id", // TODO :: Add Nationality Table
        "id_number",
        "id_number_expiration_date",
        "city",
        "district",
        "mobile",
        "mobile2",
        "children_number",
        "is_special_case",
        "special_case_type", // TODO :: Add Special Case Type Table
        "id_number_image",
        "divorce_deed",
        "husband_death_image",
        "prisoner_family_identification_facility",
        "attached_is_the_support_instrument",
        "absher_facility",
    ];

    protected $casts = [
        'status_updated_at' => 'timestamp',
    ];

}
