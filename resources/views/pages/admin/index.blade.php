@extends('adminlte::page')

@section('title', __('Admins'))


@section('content_header')
<h4 >
        {{ __('Admins') }}
    </h4>
{{-- <h1 class="">
        {{ __('Admins') }}
    </h1> 

     @livewire('show-set-school') 

     @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('admins.index'), 'text'=> 'admins', 'active'],
    ]]) 

    --}}

@stop

@section('content')
{{--@livewire('school-set')
--}}

<div style='text-align:right' class='col-12'>
    <row>

    <!-- <form action={{ route("admins.create") }}>
    <x-adminlte-button type="submit" label="Create New Admin"  theme="primary" icon="fas fa-key"  />
    </form> -->

    </row>

      </div>


    @livewire('list-admins-table')
    @livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
