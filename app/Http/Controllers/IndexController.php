<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    // $fund=Transactions::where('active', 1)->max('price');

    public function patient_detail_list(Request $request)
    {
        // $fund=Transactions::where('patient_id', $request->id)->max('amount');
        // $fund=Transactions::all();
        $patients=Patient::all();
        return view('card_view', ['patient' => $patients]);
        // return view('card_view')->with('patient', $patients)->with('fund',$fund);

    }

    public function donor_list()
    {
        $donor=User::where('role','Donor')->get();
        // $donor_id=Auth::User()->id;
        // $donor_amount=Transactions::where('donor_id', $donor_id)->sum('amount');
        // return view('donor_list', ['patient' => $donor]);
        return view('donor_list')->with('patient',$donor);
    }
}
