<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function  listele()
    {
        $iletisim = DB::table('iletisim')->get();
        return view('iletisim.liste')->with('iletisim', $iletisim);
    }
}
