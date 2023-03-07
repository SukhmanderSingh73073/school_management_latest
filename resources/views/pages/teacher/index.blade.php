@extends('adminlte::page')

@section('title', __('teachers'))


@section('content_header')
<h4 class=""> 
        {{ __('Teachers') }}
    </h4>

 

@stop

@section('content') 



@livewire('list-teachers-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
