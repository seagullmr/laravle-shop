<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    // 表示 last_used_at 字段是一个时间日期类型，$address->last_used_at 返回一个 Carbon 对象
    protected $dates = ['last_used_at'];

    protected $appends = ['full_address'];

    public function user()
    {
        return $this->belongsTo(User::calss);
    }

    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
