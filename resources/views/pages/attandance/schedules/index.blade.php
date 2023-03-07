@extends('adminlte::page')

@section('title', __('schedules'))


@section('content_header')

<h4 >
        {{ __('schedules') }}
    </h4>
    
</dv>
    
@stop


@section('content')
@livewire('school-set')
@livewire('list-schedules-table')
@livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
