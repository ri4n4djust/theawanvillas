<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Http;


class villaController extends Controller
{
    //
    public function home(){

        // var_dump($kamar[0]->foto);
        $promos = Promo::where('status', '1')->get();
        $albums = DB::table('album')->get();
        $galeries = DB::table('galeri')->get();
        $slides = DB::table('slide')->get();
        return view('pages.home', compact('promos', 'albums', 'galeries', 'slides'));
    }
    
    public function oneBedroom(){

        // var_dump($kamar[0]->foto);
        $galeries = DB::table('galeri')->where('id_album', '1')->get();
        $pages = Page::where('slug', 'one-bed-room')->first();
        return view('pages.one-bedroom', compact('galeries', 'pages'));
    }
    public function twoBedroom(){

        // var_dump($kamar[0]->foto);
        $galeries = DB::table('galeri')->where('id_album', '2')->get();
        $pages = Page::where('slug', 'two-bed-room')->first();
        return view('pages.two-bedroom', compact('galeries', 'pages'));
    }
    public function dining(){

        // var_dump($kamar[0]->foto);

        return view('pages.dinning');
    }
    public function gallery(){

        // var_dump($kamar[0]->foto);
        $albums = DB::table('album')->get();
        $galeries = DB::table('galeri')->get();
        $pages = Page::where('slug', 'gallery')->first();
        return view('pages.gallery', compact('albums', 'galeries', 'pages'));
    }

    public function services(){

        // var_dump($kamar[0]->foto);
        $galeries = DB::table('galeri')->get();
        $pages = Page::where('slug', 'provide-services')->first();
        return view('pages.services', compact('pages', 'galeries'));
    }
    public function specialOffers(){

        // var_dump($kamar[0]->foto);
        $pages = Page::where('slug', 'special-offers')->first();
        return view('pages.special-offers', compact('pages'));
    }
    public function aboutUs(){

        // var_dump($kamar[0]->foto);
        $pages = Page::where('slug', 'about-us')->first();
        return view('pages.about-us', compact('pages'));
    }
    public function generate()
    {
        $domain = request()->getSchemeAndHttpHost();
        // var_dump($domain);
        // Generate QR code with text "Hello, Laravel 11!"
        // $qrCode = QrCode::size(300)->generate($domain.'/other-services');
        // Insert logo inside QR code
        if (!file_exists(public_path('assets/images/logo.png'))) {
            abort(404, 'Logo file not found.');
        }
        $logoPath = public_path('assets/images/logo.png'); // Adjust path as needed
        $qrCode = QrCode::format('png')
            ->style('round')
            ->size(600)
            ->merge($logoPath, 1, true)
            ->generate($domain.'/other-services');
        return response($qrCode);
    }
    
    public function otherServices(){
        

        $pages = Page::where('slug', 'about-us')->first();
        return view('pages.other-services', compact('pages'));
    }

    public function booking(Request $request){

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->input('recaptcha_token'),
        ]);

        $data = $response->json();

        if (!($data['success'] ?? false) || ($data['score'] ?? 0) < 0.5) {
            return back()->withErrors(['recaptcha' => 'reCAPTCHA validation failed.']);
        }

        \Mail::send('pages.email-booking', array(
                'name' => $request->name,
                'email' => $request->email,
                'room' => $request->room,
                'cek_in' => $request->checkin,
                'cek_out' => $request->checkout,
                'adult' => $request->adult,
                'requests' => $request->requests,
                'nights' => \Carbon\Carbon::parse($request->checkin)->diffInDays(\Carbon\Carbon::parse($request->checkout))
            ), function($message) use ($request){
                // $message->from($request->email);
                $message->to('info@winmaxbali.id', 'No-replay')->from($request->email, $request->name)->subject('Booking Inquiry');
                // $message->to($request->email, $request->name)->subject('Booking Confirm');
            });
        // \Mail::send('pages.email-booking', array(
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'cek_in' => $request->checkin,
        //         'cek_out' => $request->checkout,
        //         'adult' => $request->adult,
        //         'requests' => $request->requests,
        //         'nights' => \Carbon\Carbon::parse($request->checkin)->diffInDays(\Carbon\Carbon::parse($request->checkout))
        //     ), function($message) use ($request){
        //         // $message->from($request->email);
        //         // $message->to('info@winmaxbali.id', 'No-replay')->from($request->email, $request->name)->subject('Booking Inquiry');
        //         $message->to($request->email, $request->name)->subject('Booking Inquiry');
        //     });
        return redirect()->back()->with('success', 'Booking request sent successfully!');
    }

}
