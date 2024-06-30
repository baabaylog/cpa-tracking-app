@extends('layouts.app')

@section('page_title')
    Offers
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-5">

                    <form action="{{route('admin.offer.store')}}" method="POST" class="row">
                        @csrf
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control"  required name="name" placeholder="Offer name">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="number" class="form-control" name="amount" placeholder="Amount">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="url" class="form-control" required name="link" placeholder="paste URL">
                        </div>
                        <div class="col-12 mb-3">
                            <select name="status" class="form-control">
                                <option value="active"> Active</option>
                                <option value="inactive"> Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-dark" > submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
