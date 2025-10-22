@extends('layouts.app')

@section('content')

    <div class="container-lg">
        <div class="h3 fw-bold text-success mt-5 mb-3   ">
            Users
        </div>
        <table class="table w-50 text-center">
            <tr class="text-success fw-semibold">
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td class="fw-semibold">{{ $user->id }}</td>
                <td>{{$user->username }}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection