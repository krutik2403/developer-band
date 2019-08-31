<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Developer;
use Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInquiry;

class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $developers = Developer::orderBy('id', 'DESC')->get();

            return response()->json([   
                'status'    => 1,
                'message'   => 'Success',  
                'data'      => [
                    'developers' => $developers
                ]
            ]);

        } catch(\Exception $e) {
            return response()->json([
                'status'    => 0, 
                'message'   => $e->getMessage()
            ]);
        }
    }

    public function sendInquiry(Request $request) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        try {

            if($validator->fails()) {
                 return response()->json([
                    'status' => 0, 
                    'message' => implode(", ", $validator->messages()->all())
                ]);
            }   

            Mail::to('info@band.com')->send(new ContactInquiry($request->all()));

            return response()->json([   
                'status'    => 1,
                'message'   => 'Your contact inquiry sent successfully. Our customer respresentative will contact you shortly.'
            ]);

        } catch(\Exception $e) {
             return response()->json([
                'status'    => 0, 
                'message'   => $e->getMessage()
            ]);
        }
    }

    public function story() {
        try {
            
            return response()->json([   
                'status'    => 1,
                'message'   => 'Success',  
                'data'      => [
                    'story' => setting('site.story')
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
