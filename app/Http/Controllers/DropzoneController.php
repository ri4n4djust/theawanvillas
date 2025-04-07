<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Support\Str;

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
    public function store(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('file')) {
            
            // Generate unique file name with timestamp
            $fileName1 = $request->file->getClientOriginalName();
            $idal = $request->id_album;
            $fileName = $idal . '_' . $fileName1;

            // Store the file in the 'public/uploads' directory
            $request->file->storeAs('/images/', $fileName, 'public');
            
            // Save the file name to the database
            $gallery = Gallery::updateOrCreate(
                ['nama_foto' => $fileName],
                [
                    'id_album' => $request->id_album,
                    'path' => 'storage/images/' . $fileName,
                ]
            );

            return response()->json(['success' => true, 'file_name' => $fileName]);
        }

        return response()->json(['success' => false, 'message' => 'File upload failed']);
    }

    public function storeBg(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('file')) {
            
            // Generate unique file name with timestamp
            $fileName1 = $request->file->getClientOriginalName();
            $idal = $request->idal;
            $fileName = $idal . '_' . $fileName1;

            // Store the file in the 'public/uploads' directory
            $request->file->storeAs('/banner/', $fileName, 'public');
            
            // Save the file name to the database
            $page = Page::updateOrCreate(
                ['id' => $idal],
                [
                    'image' => $fileName,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'content' => $request->content,
                ]
            );
            

            return response()->json(['success' => true, 'file_name' => $fileName]);
        }

        return response()->json(['success' => false, 'message' => 'File upload failed']);
    }


    /**
     * Remove Image
     *
     * @return void
     */
    public function destroy(Request $request){
        $fileName = $request->file_name;
        $image = Gallery::where('nama_foto', $fileName)->first();

        if ($image) {
            $image->delete();
            $image_path = $image->path;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            return response()->json(['success' => true, 'message' => 'File deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'File not found']);
    }

    public function destroyBg(Request $request){
        $fileName = $request->file_name;
        $image = Page::where('image', $fileName)->first();

        if ($fileName) {
            // $image->delete();
            // $image_path = $image->image;
            $image->update(['image' => '-']);
            $image_path = "storage/banner/". $fileName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            return response()->json(['success' => true, 'message' => 'File deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'File not found']);
    }

}
