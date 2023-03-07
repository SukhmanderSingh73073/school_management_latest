@extends('adminlte::page')

@section('title', __('incharges'))


@section('content_header')
<h4 class=""> 
        {{ __('Office Incharges') }}
    </h4>

   {{--
<h1 class=""> 
        {{ __('incharges') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges', 'active'],
    ]])
    --}}

@stop

@section('content') 




@livewire('list-incharge-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
