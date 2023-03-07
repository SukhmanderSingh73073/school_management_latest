@extends('adminlte::page')

@section('title', __('managers'))


@section('content_header')
<h4 class=""> 
        {{ __('Managers') }}
    </h4>

   {{-- <h1 class=""> 
        {{ __('managers') }}
    </h1>
    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('managers.index'), 'text'=> 'managers', 'active'],
    ]])
    ---}}

    

@stop

@section('content') 




@livewire('list-managers-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
