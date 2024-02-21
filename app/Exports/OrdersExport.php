<?php

namespace App\Exports;

use App\Models\Order;
use DB;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrdersExport implements FromCollection, WithHeadings, WithMapping
{
    public $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function collection()
    {
        if ($this->status == 0) {
            return Order::query()->with(['user'])->get();
        } else {
            return Order::query()->where('status', $this->status)->with(['user'])->get();
        }

    }

    public function headings(): array
    {
        return [
            'id' => '#',
            'id_number' => 'رقم الهوية',
            'id_number_expiration_date' => 'تاريخ انتهاء صلاحية الهوية',
            'first_name' => 'الاسم الاول',
            'parent_name' => 'اسم الاب',
            'grandfather_name' => 'اسم الجد',
            'family_name' => 'اسم العائلة',
            'employee.name' => 'اسم الموظف',
            'social_situation.name_ar' => 'الحالة الاجتماعية',
            'birth_date' => 'تاريخ الميلاد',
            'age' => 'العمر',
            'salary' => 'الراتب',
            'nationality.name_ar' => 'الجنسية',
            'cityName.name' => 'المدينة',
            'district' => 'الحي',
            'mobile' => 'رقم الجوال',
            'mobile2' => 'رقم الجوال الاضافي',
            'created_at' => 'تاريخ الانشاء',
            'childrenCount' => 'عدد الاطفال',
            'orderStatus' => 'حالة الطلب',
        ];
    }

    public function map($item): array
    {
        return [
            $item->id,
            $item->id_number,
            $item->id_number_expiration_date,

            $item->first_name,
            $item->parent_name,
            $item->grandfather_name,
            $item->family_name,

            $item->employee->name,
            $item->social_situation->name_ar,

            $item->birth_date,
            $item->age,
            $item->salary,
            $item->nationality->name_ar,
            $item->cityName->name,

            $item->district,
            $item->mobile,
            $item->mobile2,
            $item->created_at,

            $item->childrenCount(),
            $item->orderStatusName(),

        ];
    }

}



