<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function patient_register()
    {
        $user=Auth::User()->role;
        if($user=='Patient')
        {
            return view('patient_register');
        }
        else{
            echo ("
            <html>
                <head>
                    <meta http-equiv='refresh' content='2;url=home' />
                </head>
                <body>
                    <h5>Sorry! You have assigned yourself as a Donor. Redirecting back in 2 seconds...</h5>
                </body>
            </html>"
            );


            // return 'Sorry! You have assigned yourself as a Donor.';
        }
    }



    public function insert(Request $request)
    {
        $this->validate($request, array(
            'first_name' => 'required|max:25',
            'last_name'  => 'required|max:25',
            'phone'  => 'required|max:25',
            'address'  => 'required|max:25',
            'description'  => 'required|max:25',
            'photo'  => 'required',
            'document'  => 'required',
            'citizenship'  => 'required'
        ));




        $imagename = $request->file('photo')->getClientOriginalName();
        $docname = $request->file('document')->getClientOriginalName();
        $citizenshipname = $request->file('citizenship')->getClientOriginalName();
        Patient::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'description' => $request['description'],
            'photo' => $imagename,
            'document'=>$docname,
            'citizenship'=>$citizenshipname,
            'required_amount'=>$request['required_amount'],
        ]);
        $request->photo->storeAs('photos',$imagename,'public');
        $request->document->storeAs('document',$docname,'public');
        $request->citizenship->storeAs('citizenship',$citizenshipname,'public');
        return redirect('login')->with(Auth::logout());
        // return redirect('home');
    }

    

    
}