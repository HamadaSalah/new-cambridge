<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Primary;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police = Primary::first();
        return view('Admin.primary.edit', compact('police'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
            'sec1_head' =>  'required',
            'sec1_p' => 'required',
            // 'sec1_img' => 'required',
            'sec2_head' => 'required',
            'sec2_p' => 'required',
            // 'sec2_img' => 'required',
            'sec3_head' => 'required',
            'sec3_p' => 'required',
            // 'sec3_img' => 'required',
            'sec4_head' => 'required',
            'sec4_p' => 'required',
            // 'sec4_img' => 'required',
        ]);

        $requestData = $request->except('_token', '_method');
        $requestData['sec1_img'] = $this->verifyAndStoreMultiImage($request, 'sec1_img');
        $requestData['sec2_img'] = $this->verifyAndStoreImage($request, 'sec2_img');
        $requestData['sec3_img'] = $this->verifyAndStoreImage($request, 'sec3_img');
        $requestData['sec4_img'] = $this->verifyAndStoreImage($request, 'sec4_img');
        // dd($requestData);
        $wel = Primary::findOrFail(1);
        if($requestData['sec1_img']) {
                    $wel->update([
            'sec1_head' =>  $request->sec1_head,
            'sec1_p' => $request->sec1_p,
            'sec1_img' =>  $requestData['sec1_img'] ?? $wel->sec1_img,
            'sec2_head' => $request->sec2_head,
            'sec2_p' => $request->sec2_p,
            'sec2_img' => $requestData['sec2_img'] ?? $wel->sec2_img,
            'sec3_head' => $request->sec3_head,
            'sec3_p' => $request->sec3_p,
            'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
            'sec4_head' => $request->sec4_head,
            'sec4_p' => $request->sec4_p,
            'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img
        ]);

        }
        else {
        $wel->update([
            'sec1_head' =>  $request->sec1_head,
            'sec1_p' => $request->sec1_p,
            'sec2_head' => $request->sec2_head,
            'sec2_p' => $request->sec2_p,
            'sec2_img' => $requestData['sec2_img'] ?? $wel->sec2_img,
            'sec3_head' => $request->sec3_head,
            'sec3_p' => $request->sec3_p,
            'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
            'sec4_head' => $request->sec4_head,
            'sec4_p' => $request->sec4_p,
            'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img
        ]);

        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
