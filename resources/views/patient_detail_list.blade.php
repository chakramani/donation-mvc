@extends('layouts.app')
@section('content')


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Photo</th>
            <th scope="col">Citizenship</th>
            <th scope="col">Document</th>
            <th scope="col">Problem</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->first_name}}</td>
            <td>{{$patient->last_name}}</td>
            <td>{{$patient->phone}}</td>
            <td>{{$patient->address}}</td>
            <td><img src="{{asset('/storage/photos/'.$patient->photo)}}" alt="photo" width="60" /></td>
            <td><img src="{{asset('/storage/citizenship/'.$patient->citizenship)}}" alt="citizenship" width="60" /></td>
            <td><img src="{{asset('/storage/document/'.$patient->document)}}" alt="document" width="60" /></td>
            <td>{{$patient->description}}</td>
            <td><input type="submit" class="btn btn-info" value="Donate"></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection