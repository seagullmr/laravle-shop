<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;

class CouponCodesController extends Controller
{
    public function show($code, Request $request)
    {
        $record = CouponCode::query()->where('code', $code)->first();
        if (!$record) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable($request->user());

        return $record;
    }
}
