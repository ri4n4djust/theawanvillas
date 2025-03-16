<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;

class villaController extends Controller
{
    //
    public function home(){

        // var_dump($kamar[0]->foto);
        $promos = Promo::where('status', '1')->get();
        $albums = DB::table('album')->get();
        $galeries = DB::table('galeri')->get();
        return view('pages.home', compact('promos', 'albums', 'galeries'));
    }
    public function oneBedroom(){

        // var_dump($kamar[0]->foto);
        $galeries = DB::table('galeri')->where('id_album', '1')->get();
        return view('pages.one-bedroom', compact('galeries'));
    }
    public function twoBedroom(){

        // var_dump($kamar[0]->foto);
        $galeries = DB::table('galeri')->where('id_album', '2')->get();
        return view('pages.two-bedroom', compact('galeries'));
    }
    public function dining(){

        // var_dump($kamar[0]->foto);

        return view('pages.dinning');
    }
    public function gallery(){

        // var_dump($kamar[0]->foto);
        $albums = DB::table('album')->get();
        $galeries = DB::table('galeri')->get();
        return view('pages.gallery', compact('albums', 'galeries'));
    }

    public function services(){

        // var_dump($kamar[0]->foto);

        return view('pages.services');
    }
    public function aboutUs(){

        // var_dump($kamar[0]->foto);

        return view('pages.about-us');
    }

    

}
