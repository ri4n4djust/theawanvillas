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
    public function oneBedroom(){

        // var_dump($kamar[0]->foto);

        return view('pages.one-bedroom');
    }
    public function twoBedroom(){

        // var_dump($kamar[0]->foto);

        return view('pages.two-bedroom');
    }
    public function dining(){

        // var_dump($kamar[0]->foto);

        return view('pages.dinning');
    }
    public function gallery(){

        // var_dump($kamar[0]->foto);

        return view('pages.gallery');
    }

    public function spa(){

        // var_dump($kamar[0]->foto);

        return view('pages.spa');
    }

    //=========special offers
    public function lastMinute(){

        return view('pages.last-minute');
    }
    public function hotDeals(){

        return view('pages.hot-deals');
    }
    public function earlyBird(){

        return view('pages.early-bird');
    }
    public function twoNightHoneymoon(){

        return view('pages.two-night-honeymoon');
    }
    public function threeNightHoneymoon(){

        return view('pages.three-night-honeymoon');
    }
    public function familyPackage(){

        return view('pages.family-package');
    }
//=========admin
    public function adminGallery(){

        $images = "";
        return view('admin.admin-gallery', compact('images'));
    }   
}
