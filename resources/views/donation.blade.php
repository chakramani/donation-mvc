@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-4">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<form method="get">
    @foreach($patient as $patient)
    <div class="card ml-5 mr-5 mt-5">
        <div class="row">
            <div class="col ml-4 mb-1">
                <img src="{{asset('/storage/photos/'.$patient->photo)}}" alt="photo" width="60" class="mt-1" />
            </div>
            <div class="col mt-3">
            <a href="{{asset('/storage/citizenship/'.$patient->citizenship)}}">Citizenship</a>
            </div>
            <div class="col mt-3">
            <a href="{{asset('/storage/document/'.$patient->document)}}">Donation</a>
            </div>
        </div>
    </div>
    <div class="card ml-5 mr-5 mt-2">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="{{$patient->first_name}}"
                    disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Last Name</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="{{$patient->last_name}}"
                    disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="{{$patient->address}}" disabled>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Description</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="{{$patient->description}}" disabled>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Required Amount</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="{{$patient->required_amount}}" name="required_amount" disabled>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Total Collected Donation</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="{{$fund}}" disabled>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Amount Collected</label>
            <input type="number" class="form-control" id="inputAddress2" placeholder="Amount" name="amount" max="{{$patient->required_amount - $fund}}"  >
        </div>
        <center>
            <input type="submit" class="btn btn-primary mb-1" value="Donate"
                formaction="{{url('/donate_amount/'.$patient->id)}}">
        </center>
    </div>
    </div>
    @endforeach
</form>
<br>


@endsection