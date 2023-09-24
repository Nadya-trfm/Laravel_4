<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeederController extends Controller
{
    public function index()
    {
        $seedersOne = DB::table('review')
            ->join('user', 'review.user_id', '=', 'user.id')
            ->where('review.useful', '>=', 10)
            ->whereIn('user.city', ['Волгоград', 'Самара'])
//            ->orWhere(function ($query) {
//                $query->select('review  as r')->selectRaw('count(r.id) as count_rew')
//                    ->join('product as pr', function ($join) {
//                        $join->on('r.product_id', '=', 'pr.id')
//                            ->where('pr.price', '>', 3000);
//                    })
//                    ->groupBy('r.user_id')
//                    ->whereRaw('count(r.id) > 10');
//            })
            ->get(['review.*', 'user.city']);

        return view('seeder', ['seeders' => $seedersOne]);
    }
}
