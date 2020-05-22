@extends('layouts.master')

@section('css')

@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Ajouter un parcours</h4>
            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['method' => 'POST', 'url' => route('beneficiaires.store.parcours'), 'id' =>'form-horizontal', 'class' => 'form-horizontal form-wizard-wrapper']) !!}

                    @include('beneficiaire.parcours.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/jquery-steps/jquery-steps.min.js')}}"></script>

    <script>
        $("#form-horizontal").steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slide",
            onFinished: function (event, currentIndex)
            {
                return $(this).submit();
            }
        });
    </script>
@endsection


{{--

http://www.jquery-steps.com/Examples

var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});

--}}
