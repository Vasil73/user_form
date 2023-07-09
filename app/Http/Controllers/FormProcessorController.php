<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

    class FormProcessorController extends Controller
    {
        public function index()
        {
           return view ('user');
        }

    public function store(Request $request)
    {
        $user_data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
             'email' => $request->email
        ];

        return  view ('user_data')->with(['user_data' => $user_data]);

        // return response ()->json ($user_data);

        // return redirect()->route('hello_user');

       // return redirect()->action([HelloController::class, 'hello']);

    }

    public function user()
    {
        return view('hello_user');
    }

    }
