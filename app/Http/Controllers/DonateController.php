<?php

namespace App\Http\Controllers;

use App\Mail\ThankMail;
use App\Models\Patient;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DonateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function donate_donate(Request $request)
    {
        $user=Auth::User()->role;
        if($user=='Donor')
        {
            $fund=Transactions::where('patient_id', $request->id)->sum('amount');
            // var_dump($fund);
            $patient=Patient::where('id',$request->id)->get();
            // return view('donation', ['patient' => $patient]);
            return view('donation')->with('patient', $patient)->with('fund',$fund);
        }
        else{
            return back()->with('success','Sorry!! you have assigned yourself as Patient.');
        }

    }


    public function donate_all()
    {
        return view('donation_all');
        // return view('donation')->with('patient', $patient)->with('fund',$fund);
    }



    public function amount(Request $request)
    {
        $required_amt=Patient::where('id',$request->id)->get('required_amount');
        $total_fund=Transactions::where('patient_id', $request->id)->sum('amount');
        // dd($request->amount);

        // if($required_amt>$total_fund)
        // {
            $this->validate($request, array(
                'amount' => 'required'
            ));

            Transactions::create([
                'amount' => $request['amount'],
                'donor_id'=>Auth::User()->id,
                'donor_name'=>Auth::User()->first_name,
                'patient_id'=>$request->id
            ]);
        


                $details=[
                    'title' =>'Ux Qoude',
                    'body' =>'Thank You for Donating.'
                ];

                Mail::to(Auth::User()->email)->send(new ThankMail($details));
                // return "email sent";


                
                // echo ("<html>
                // <head>
                //     <meta http-equiv='refresh' content='2;url=home' />
                // </head>
                // <body>
                //     <h5>Successfully donated. Redirecting back to index page in 2 seconds...</h5>
                // </body>
                // </html>");

                return back()->with('success',Auth::User()->first_name.',  Thank You for helping');
                // return redirect('home')->with('message','Thank you!');
        // }
        // else
        // {
        //     return 'dherai vayo';
        //     // return back()->with('success',Auth::User()->first_name.',  Amount Limitation Reached');
        // }
    }


    public function donation_amount_all(Request $request)
    {
        $this->validate($request, array(
            'amount' => 'required'
        ));

        Transactions::create([
            'amount' => $request['amount']
        ]);

        return back()->with('success',Auth::User()->first_name.',  Thank You for helping');
    }
}