@extends('layouts.master')

@section('css')
        <!-- Plugin css -->
        <link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Calendar</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-settings mr-2"></i> Settings
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id='calendar'></div>
        
                                        <div style='clear:both'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/calendar.init.js')}}"></script>
@endsection