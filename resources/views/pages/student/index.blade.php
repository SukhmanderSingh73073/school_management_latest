@extends('adminlte::page')

@section('title', __('Students'))


@section('content_header')
<h4 class=""> 
        {{ __('Students') }}
    </h4>

   {{--   <h1 class="">
        {{ __('Students') }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [['href' => route('dashboard'), 'text' => 'Dashboard'], ['href' => route('students.index'), 'text' => 'Students', 'active']]])

    --}}
@stop

@section('content') 
    @livewire('list-students-table')

    @livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop
