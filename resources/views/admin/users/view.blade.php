@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <h2>Users</h2>
    </div>
    <div class="row mt-4">
        <table class="table">
            <thead>
                <th> Name </th>
                <th> Email </th>
                <th> Created at </th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->created_at }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
    
@endsection
