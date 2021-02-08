<?php

namespace App\Http\Controllers;

use App\Models\StoreImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Symfony\Contracts\Service\Attribute\Required;

class StoreImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StoreImage::lastest()->pagintate(5);
        return view('store_image', compact('data'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function insert_image(Request $request)
    {
        $request->validate([
            'user_name'=> 'required',
            'user_image' => 'required|image|max:2048'
        ]);

        $image_file = $request->user_image;

        $image = Image::make($image_file);

        Response::make($image->enconde('jpeg'));

        $form_data = array(
            'user_name' => $request->user_name,
            'user_image' => $image,
        );

        StoreImage::create($form_data);

        return redirect()->back()->with('success', 'Image stored in Database successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreImage  $storeImage
     * @return \Illuminate\Http\Response
     */
    public function fetch_image($image_id)
    {
        $image = StoreImage::findOrFail($image_id);

        $image_file = Image::make($image->user_image);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
