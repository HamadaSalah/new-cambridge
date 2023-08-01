<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GallCategory;
use App\Models\Gallery;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::paginate(20);
        return view('Admin.Gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = GallCategory::all();
        return view('Admin.Gallery.create', compact('cats'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'img' => 'required',
            'head' => 'required',
        ]);
        $img = $this->verifyAndStoreMultiImage($request);
        foreach($img as $myimm) {
            Gallery::create([
                'category_id' => $request->category_id,
                'img' => $myimm,
                'head' => $request->head,
            ]);
        }
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = GallCategory::all();

        $gall = Gallery::findOrFail($id);
        return view('Admin.Gallery.edit', compact('gall', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'category_id' => 'required',
            'head' => 'required',
        ]);
        $gall = Gallery::findOrFail($id);
        $img = $this->verifyAndStoreImage($request) ?? $gall->img;
         $gall->update([
            'category_id' => $request->category_id,
            'img' => $img,
            'head' => $request->head,
        ]);
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cal = Gallery::findOrFail($id);
        $cal->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }
}
