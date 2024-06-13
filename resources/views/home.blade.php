@extends('layouts.guest')

@section('page-title')
    Home
@endsection

@section('head-import')
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection

@section('content')
    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Revenue</h5>
                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                            <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                            <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                            <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-content">
                <div id="revenueMonthly"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-two">
            <div class="widget-heading">
                <h5 class="">Sales by Category</h5>
            </div>
            <div class="widget-content">
                <div id="chart-2" class=""></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<x-footer/>
@endsection

@section('footer-import')
     <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <script src="plugins/apex/apexcharts.min.js"></script>
     <script src="assets/js/dashboard/dash_1.js"></script>
     <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
