@extends('adminlte::page')

@section('title', __('classteachers'))


@section('content_header')
<h4 >
        {{ __('Class Teacher') }}
    </h4>
{{-- <h1 class=""> 
        {{ __('classteachers') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classteachers.index'), 'text'=> 'classteachers', 'active'],
    ]])
--}}
@stop

@section('content') 


@livewire('list-class-teachers-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
