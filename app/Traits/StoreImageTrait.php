<?php

namespace App\Traits;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Storage;

trait StoreImageTrait {

    public function verifyAndStoreImage( Request $request, $fieldname = 'img', $directory = 'uploads' ) {

        if( $request->hasFile( $fieldname ) ) {
            $file = $request->file($fieldname ?? 'img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'imgs'.'_'.time().'.'.$ext;
            $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
            $storageName = basename($storagePath);
            return $directory . '/' . $storageName;
        }
    }    
    public function verifyAndStoreMultiImage( Request $request, $fieldname = 'img', $directory = 'uploads' ) {
        $Myimges = [];
        if( $request->hasFile( $fieldname ) ) {

            $files = $request->file($fieldname ?? 'img');
            foreach ($files as $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = 'imgs'.'_'.time().'.'.$ext;
                $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
                $storageName = basename($storagePath);
                $mypath = $directory . '/' . $storageName;

                // return $directory . '/' . $storageName;
                array_push($Myimges, $directory . '/' . $storageName);
            }
        }
        return $Myimges;
    }

    public function verifyAndStoreVideo( Request $request, $fieldname = 'video', $directory = 'uploads' ) {

        if( $request->hasFile( $fieldname ) ) {
            $file = $request->file('video');
            $ext = $file->getClientOriginalExtension();
            $filename = 'videos'.'_'.time().'.'.$ext;
            $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
            $storageName = basename($storagePath);
            return $directory . '/' . $storageName;

        }
    }

}
