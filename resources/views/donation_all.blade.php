@extends('Layouts.app')
@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-warning alert-block mt-4">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


<div class="mt-5">
    <form method="get">
        <div class="form-group row">
            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

            <div class="col-md-6">
                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount"
                    value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                @error('amount')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-5 col-form-label text-md-right">
                <input type="submit" value="Donate" formaction="{{url('/donate_amount_all')}}" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

@endsection