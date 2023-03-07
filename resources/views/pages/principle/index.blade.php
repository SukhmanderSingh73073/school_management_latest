@extends('adminlte::page')

@section('title', __('principles'))


@section('content_header')
<h4 class="">
        {{ __('Manage Principles') }}
    </h4>

    {{--  <h1 class=""> 
        {{ __('principles') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('principles.index'), 'text'=> 'principles', 'active'],
    ]])
--}}
@stop

@section('content') 



@livewire('list-principles-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
