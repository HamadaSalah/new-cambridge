<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CAS;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class CASController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cas = CAS::first();
        return view('Admin.CAS.edit', compact('cas'));
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
            'sec5_head' => 'required',
            'sec5_p' => 'required',
            // 'sec5_img' => 'required',
            'sec6_head' => 'required',
            'sec6_p' => 'required',
            // 'sec6_img' => 'required',
            'sec7_head' => 'required',
            'sec7_p' => 'required',
            // 'sec6_img' => 'required',
            'sec8_head' => 'required',
            'sec8_p' => 'required',
            // 'sec6_img' => 'required',
        ]);

        $requestData = $request->except('_token', '_method');
        $requestData['sec1_img'] = $this->verifyAndStoreImage($request, 'sec1_img');
        $requestData['sec3_img'] = $this->verifyAndStoreMultiImage($request, 'sec3_img');
        $requestData['sec4_img'] = $this->verifyAndStoreImage($request, 'sec4_img');
        $requestData['sec5_img'] = $this->verifyAndStoreMultiImage($request, 'sec5_img');
        $requestData['sec7_img'] = $this->verifyAndStoreImage($request, 'sec7_img');
        $requestData['sec8_img'] = $this->verifyAndStoreImage($request, 'sec8_img');
        // dd($requestData);
        $wel = CAS::findOrFail(1);
        if( $requestData['sec5_img'] &&  $requestData['sec3_img'] ) {
            $wel->update([
                'sec1_head' =>  $request->sec1_head,
                'sec1_p' => $request->sec1_p,
                'sec1_img' =>  $requestData['sec1_img'] ?? $wel->sec1_img,
                'sec2_head' => $request->sec2_head,
                'sec2_p' => $request->sec2_p,
                'sec3_head' => $request->sec3_head,
                'sec3_p' => $request->sec3_p,
                'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
                'sec4_head' => $request->sec4_head,
                'sec4_p' => $request->sec4_p,
                'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img,
                'sec5_head' => $request->sec5_head,
                'sec5_p' => $request->sec5_p,
                'sec5_img' => $requestData['sec5_img'] ?? $wel->sec5_img,
                'sec6_head' => $request->sec6_head,
                'sec6_p' => $request->sec6_p,
                'sec7_head' => $request->sec7_head,
                'sec7_p' => $request->sec7_p,
                'sec7_img' => $requestData['sec7_img'] ?? $wel->sec7_img,
                'sec8_head' => $request->sec8_head,
                'sec8_p' => $request->sec8_p,
                'sec8_img' => $requestData['sec8_img'] ?? $wel->sec8_img,
    
            ]);
    
        }
        else if($requestData['sec5_img']) {
            $wel->update([
                'sec1_head' =>  $request->sec1_head,
                'sec1_p' => $request->sec1_p,
                // 'sec1_img' =>  $requestData['sec1_img'] ?? $wel->sec1_img,
                'sec2_head' => $request->sec2_head,
                'sec2_p' => $request->sec2_p,
                'sec3_head' => $request->sec3_head,
                'sec3_p' => $request->sec3_p,
                'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
                'sec4_head' => $request->sec4_head,
                'sec4_p' => $request->sec4_p,
                'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img,
                'sec5_head' => $request->sec5_head,
                'sec5_p' => $request->sec5_p,
                'sec5_img' => $requestData['sec5_img'] ?? $wel->sec5_img,
                'sec6_head' => $request->sec6_head,
                'sec6_p' => $request->sec6_p,
                'sec7_head' => $request->sec7_head,
                'sec7_p' => $request->sec7_p,
                'sec7_img' => $requestData['sec7_img'] ?? $wel->sec7_img,
                'sec8_head' => $request->sec8_head,
                'sec8_p' => $request->sec8_p,
                'sec8_img' => $requestData['sec8_img'] ?? $wel->sec8_img,
    
            ]);
    
        }
        else if($requestData['sec3_img']) {
            $wel->update([
                'sec1_head' =>  $request->sec1_head,
                'sec1_p' => $request->sec1_p,
                'sec1_img' =>  $requestData['sec1_img'] ?? $wel->sec1_img,
                'sec2_head' => $request->sec2_head,
                'sec2_p' => $request->sec2_p,
                'sec3_head' => $request->sec3_head,
                'sec3_p' => $request->sec3_p,
                'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
                'sec4_head' => $request->sec4_head,
                'sec4_p' => $request->sec4_p,
                'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img,
                'sec5_head' => $request->sec5_head,
                'sec5_p' => $request->sec5_p,
                // 'sec5_img' => $requestData['sec5_img'] ?? $wel->sec5_img,
                'sec6_head' => $request->sec6_head,
                'sec6_p' => $request->sec6_p,
                'sec7_head' => $request->sec7_head,
                'sec7_p' => $request->sec7_p,
                'sec7_img' => $requestData['sec7_img'] ?? $wel->sec7_img,
                'sec8_head' => $request->sec8_head,
                'sec8_p' => $request->sec8_p,
                'sec8_img' => $requestData['sec8_img'] ?? $wel->sec8_img,
    
            ]);
            
        }
        else {
            $wel->update([
                'sec1_head' =>  $request->sec1_head,
                'sec1_p' => $request->sec1_p,
                'sec1_img' =>  $requestData['sec1_img'] ?? $wel->sec1_img,
                'sec2_head' => $request->sec2_head,
                'sec2_p' => $request->sec2_p,
                'sec3_head' => $request->sec3_head,
                'sec3_p' => $request->sec3_p,
                // 'sec3_img' => $requestData['sec3_img'] ?? $wel->sec3_img,
                'sec4_head' => $request->sec4_head,
                'sec4_p' => $request->sec4_p,
                'sec4_img' => $requestData['sec4_img'] ?? $wel->sec4_img,
                'sec5_head' => $request->sec5_head,
                'sec5_p' => $request->sec5_p,
                // 'sec5_img' => $requestData['sec5_img'] ?? $wel->sec5_img,
                'sec6_head' => $request->sec6_head,
                'sec6_p' => $request->sec6_p,
                'sec7_head' => $request->sec7_head,
                'sec7_p' => $request->sec7_p,
                'sec7_img' => $requestData['sec7_img'] ?? $wel->sec7_img,
                'sec8_head' => $request->sec8_head,
                'sec8_p' => $request->sec8_p,
                'sec8_img' => $requestData['sec8_img'] ?? $wel->sec8_img,
    
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

