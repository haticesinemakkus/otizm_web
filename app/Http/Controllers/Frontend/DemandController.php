<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function save(Request $request)
    {
        $params = $request->all();
        Demand::create($params);
        return redirect()->back()->with('success', 'İstek/Öneri gönderildi.');
    }
}
