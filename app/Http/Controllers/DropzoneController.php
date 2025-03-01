<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class DropzoneController extends Controller
{
    //
    public function index(): View
    {
        $images = Gallery::all();
        return view('dropzone', compact('images'));
    }
      
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request): JsonResponse
    {
        // Initialize an array to store image information
        $images = [];
  
        // Process each uploaded image
        foreach($request->file('files') as $image) {
            // Generate a unique name for the image
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
              
            // Move the image to the desired location
            $image->move(public_path('images'), $imageName);
  
            // Add image information to the array
            $images[] = [
                'id_album' => 1,
                'nama_foto' => $imageName,
                'path' => asset('/images/'. $imageName),
                'filesize' => filesize(public_path('images/'.$imageName))
            ];
        }
  
        // Store images in the database using create method
        foreach ($images as $imageData) {
            Gallery::create($imageData);
        }
     
        // return response()->json(['success'=>$images]);
        // return response()->json();
        // return print_r($images);
        return view('admin.admin-gallery');
    }
}
