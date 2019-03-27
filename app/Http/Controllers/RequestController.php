<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function requests(){
        $requests = DB::table('requests')
            ->join('offers', 'requests.offer_id', '=', 'offers.id')
            ->join('operators', 'requests.operator_id', '=', 'operators.id')
            ->select('requests.id', 'offers.name', 'requests.price', 'requests.count', 'operators.fio')
            ->where('requests.count', '>', 2)
            ->orWhereIn('operators.id', [10,12])
            ->get();

        return view('requests')->with(compact('requests'));
    }

    public function offers(){
        $offers = DB::table('requests')
            ->join('offers', 'requests.offer_id', '=', 'offers.id')
            ->select('offers.name', DB::raw('sum(requests.price) as sum'), DB::raw('sum(requests.count) as count'))
            ->groupBy('requests.offer_id')
            ->get();
            echo $offers;
    }
}
