@extends('layouts.app')

@section('page_title')
    Post Back URLs
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <span>
                        <h4> Your Postback URL </h4>
                    </span>
                    <span> Paste your postback your to your user profile. </span>
                </div>
                <div class="border bg-light rounded p-3">
                    <span>
                        {{ URL::to('/') . '/api/postback_url/' . Auth::user()->id . '/maxbounty?s1=#S1#&offid=#OFFID#&ip=#IP#&rate=#RATE#' }}
                    </span>
                </div>
            </div>
            <div class="col-12 mt-5">
                <label>Add sub id into your offer URL <code> s2=[clickid] </code>. Then create offer. </label>
                <div class="d-flex align-items-center justify-content-between">
                    <input type="url" id="company_url" style="max-width: 90%;" class="form-control">
                    <button class="btn btn-dark " style="white-space: nowrap; " id="add_id_company_url">add id</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer_import')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#add_id_company_url', function() {
                const btn = $(this);
                const company_url = $('#company_url');
                console.log(company_url.val())

                if (!company_url.val().includes('s2=[clickid]')) {
                    if (company_url.val().includes('?')) {
                        const added_id = company_url.val() + '&s2=[clickid]';
                        company_url.val(added_id);
                    } else {
                        const added_id = company_url.val() + '?s2=[clickid]';
                        company_url.val(added_id);

                    }
                }
            });
        });
    </script>
@endsection
