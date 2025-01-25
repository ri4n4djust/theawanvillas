<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class villaController extends Controller
{
    //
    public function home(){

        // var_dump($kamar[0]->foto);

        return view('pages.home');
    }
    public function villas(){

        // var_dump($kamar[0]->foto);

        return view('pages.villas');
    }
    public function gallery(){

        // var_dump($kamar[0]->foto);

        return view('pages.galeri');
    }
}
