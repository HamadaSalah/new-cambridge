<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacCategory;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class FacilCategoryController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = FacCategory::all();
        return view('Admin.Facil_cat.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Facil_cat.create');
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
            'name' => 'required',
            'head' => 'required',
            'img' => 'required',
        ]);
        $requestData = $request->except('_token', '_method');
            $requestData['img'] = $this->verifyAndStoreImage($request, 'img');
         
        FacCategory::create($requestData);
        return redirect()->route('admin.facil_cat.index')->with('Updated Successfully');
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
        $cat = FacCategory::findOrFail($id);
        return view('Admin.Facil_cat.edit', compact('cat'));
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
            'name' => 'required',
            'head' => 'required',
        ]);
        $requestData = $request->except('_token', '_method');
        if($request->file('img')) {
            $requestData['img'] = $this->verifyAndStoreImage($request, 'img');
        }
         
        $cat = FacCategory::findOrFail($id);
        $cat->update($requestData);
        return redirect()->route('admin.facil_cat.index')->with('Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cal = FacCategory::findOrFail($id);
        $cal->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }
}
