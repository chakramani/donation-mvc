@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-warning alert-block mt-4">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class=" row mt-5 ml-3">
    @foreach($patient as $patient)
    <form method="get">
        <div class=" card ml-3 mt-2" style="width: 18rem;">

            <div class="col">
                <img src="{{asset('/storage/photos/'.$patient->photo)}}" alt="photo" width="60" class="mt-1" />
            </div>
            <div class="card-body">
                <center>
                    <h5>{{$patient->first_name}}&nbsp;{{$patient->last_name}}</h5>
                </center>
                <h6>{{$patient->address}}</h6>
                <h6>{{$patient->description}}</h6>
                <center><input type="submit" class="btn btn-primary" value="{{__('msg.Donate')}}"
                        formaction="{{url('/donate_donate/'.$patient->id)}}">
                </center>
            </div>
        </div>
    </form>
    @endforeach
</div>
<br>

@endsection