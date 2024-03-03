<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    const PENDING = 1;
    const ACCEPTED = 2;
    const MISSING = 3;

    const REJECTED = 4;
    const REUPDATED = 5;
    const TO_MARKET = 6;

    protected $fillable = [
        'status', // 1- pending , 2- accepted , 3- missing 4- rejected
        'user_id',
        'created_by', // employee id
        'status_updated_at',
        'notes',
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
        "deed_ofـabandonment",
        "other_attachments",
        "other_attachments1",
        "other_attachments2",
    ];

    protected $casts = [
        'status_updated_at' => 'timestamp',
    ];

    public function childreen()
    {
        return $this->hasMany(OrderChildreen::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    public function social_situation()
    {
        return $this->belongsTo(SocialSituation::class, 'social_situation_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function cityName()
    {
        return $this->belongsTo(City::class, 'city');
    }

    public function orderStatusName()
    {
        if ($this->status == 1) {
            return " الطلب قيد المراجعة";
        }

        if ($this->status == 2) {
            return " الطلب مكتمل الشروط";
        }

        if ($this->status == 3) {
            return " الطلب غير كامل البيانات";
        }

        if ($this->status == 4) {
            return " الطلب غير مكتمل الشروط";
        }

        if ($this->status == 5) {
            return "تم تحديث بيانات الطلب الغير مكتملة";
        }

        if ($this->status == 6) {
            return "تم ترحيل الطلب الي الدكان";
        }

    }

    public function orderStatusSmsMessage()
    {
        if ($this->status == 1) {
            return "تم استلام طلبكم وسيتم التحقق من استيفائكم لشروط البرنامج والبيانات المقدمة";
        }

        if ($this->status == 2) {
            return "تم قبول طلبك بنجاح, ستصلك رساله بموعد استلام طلبك";
        }

        if ($this->status == 3) {
            return "تم تعليق طلبك، يرجى مراجعة البيانات المدخلة في برنامج أرزاق رمضان على منصة اقرأ" . ' ( ' . Carbon::now()->format('Y-m-d H:i') . " )";
        }

        if ($this->status == 4) {
            return "تم رفض الطلب لعدم تحقيق شروط القبول";
        }

        if ($this->status == 5) {
            return "تم تحديث بيانات الطلب الغير مكتملة";
        }

        if ($this->status == 6) {
            return "تم ترحيل الطلب الي الدكان";
        }

    }

    public static function getOdersCount($orderStatus)
    {
        return Order::where("status", $orderStatus)->count();
    }

    public function childrenCount()
    {
        return $this->childreen()->count();
    }

}
