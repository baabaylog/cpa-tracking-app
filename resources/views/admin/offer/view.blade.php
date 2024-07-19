@extends('layouts.app')

@section('page_title')
    Offers
@endsection

@section('content')
    <div class="container">
        @session('message')
        <div class="alert alert-info" role="alert">
            {{ session('message') }}
        </div>
        @endsession
        <div class="row">
            <div class="col">
                <a class="btn btn-dark" href="{{ route('admin.offer.create') }}">create</a>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col">
                <table class="table" >
                    <thead>
                        <th> Name</th>
                        <th> Clicks</th>
                        <th> Amount</th>
                        <th> Link </th>
                        <th> Status</th>
                    </thead>
                    <tbody>
                        @foreach ($offers as $offer)
                            
                        <tr>
                            <td> {{ $offer->name }} </td>
                            <td> {{ $offer->clicks }} </td>
                            <td> {{ $offer->amount }} </td>
                            <td> 
                                <div class="border rounded bg-light p-1" >
                                    @php
                                        $offerName = str_replace(' ', '_', strtolower($offer->name));
                                    @endphp
                                    <a target="_blank" href="{{ (URL::to("/api/offer/$offerName/$offer->id")) }}">{{ (URL::to("/api/offer/$offerName/$offer->id")) }}</a>
                                </div>
                            </td>
                            <td> <span style="border: 1px solid lightblue; border-radius: 7px; padding: 5px 15px;"> {{ ucfirst($offer->status) }} </span> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection