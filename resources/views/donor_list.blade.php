@extends('layouts.app')

@section('content')

<table class="container table mt-4">
  <thead>
  
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">DOB</th>
      <th scope="col">Role</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
  @foreach($patient as $patient)
    <tr>
      <td>{{$patient->first_name}}</th>
      <td>{{$patient->last_name}}</td>
      <td>{{$patient->email}}</td>
      <td>{{$patient->address}}</td>
      <td>{{$patient->phone}}</td>
      <td>{{$patient->dob}}</td>
      <td><mark>{{$patient->role}}</mark></td>
      <td><img src="{{asset('/storage/user_photo/'.$patient->photo)}}" alt="photo" width="60" class="rounded" /></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection