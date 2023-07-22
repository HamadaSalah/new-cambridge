<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Slider.index', [
            'sliders' =>  HomeSlider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slider.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $this->verifyAndStoreImage($request);
        HomeSlider::create([
            'top_head' => $request->top_head,
            'head' => $request->head,
            'img' => $img
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Added Successfully');
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
        return view('Admin.Slider.edit', [
            'slider' => HomeSlider::findOrFail($id)
        ]);
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
        $slider = HomeSlider::findOrFail($id);
        if ($request->has('img')) {
            $img = $this->verifyAndStoreImage($request);
        } else {
            $img = $slider->img;
        }
        $slider->update([
            'top_head' => $request->top_head,

            'head' => $request->head,
            'img' => $img
        ]);
        return redirect()->route('admin.slider.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = HomeSlider::findOrFail($id);
        $slider->delete();
        return redirect()->back()->with('success', 'Deleted Succesfully');
    }
}
