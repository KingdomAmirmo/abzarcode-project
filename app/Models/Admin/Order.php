<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOrderStatusValueAttribute()
    {
        switch ($this->order_status){
            case 0:
                $result = "جدید";
                break;
            case 1:
                $result = "بررسی شده";
                break;
            case 2:
                $result = "تایید شده";
                break;
            case 3:
                $result = "اتمام یافته";
                break;
            case 4:
                $result = "باطل شده";
                break;
            default:
                $result = "بررسی نشده";
                break;
        }
        return $result;
    }

}
