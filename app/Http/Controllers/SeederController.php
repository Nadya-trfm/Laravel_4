<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeederController extends Controller
{
    public function index(){
        $seedersOne=DB::table('review')
            ->join('user', 'review.user_id', '=', 'user.id')
            ->where('user.city', '=','Волгоград')
            ->orWhere('user.city', '=', 'Самара')
            ->where('review.useful','>=',10)
            ->get(['review.*','user.city']);
        dd( $seedersOne);
    }
}
