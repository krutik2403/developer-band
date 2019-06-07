<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Developer;
use Storage;

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
                'message'   => trans('validation.success'),  
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
}
