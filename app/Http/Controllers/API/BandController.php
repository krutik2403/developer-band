<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInquiry;
use App\Band;

class BandController extends Controller
{
    public function index()
    {
        try {
            
            $bands = Band::orderBy('id', 'DESC')->get();

            return response()->json([   
                'status'    => 1,
                'message'   => 'Success',  
                'data'      => [
                    'bands' => $bands
                ]
            ]);

        } catch(\Exception $e) {
            return response()->json([
                'status'    => 0, 
                'message'   => $e->getMessage()
            ]);
        }
    }
}
