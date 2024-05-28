<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;

class ImageController extends Controller
{
    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     * Upload une image
     */
    public function upload(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');

        $imageName = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
       
        $imagePath = $image->storeAs('public/images', $imageName);
        $imagePath = "storage/app/" . $imagePath;

        // dd($imagePath);

        $page = Page::findOrfail($request->page_id);
        $page->image_url = $imageName;
        $page->save();
    
        return back()->with('success', 'Image uploaded successfully');
    }
}
