@extends('adminlte::page')

@section('title', __('Subjects'))

@section('content_header')
<h4 class=""> 
        {{ __('Subjects') }}
    </h4>

   {{--   <h1 class="">
        {{ __('Subjects') }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [['href' => route('dashboard'), 'text' => 'Dashboard'], ['href' => route('students.index'), 'text' => 'Students', 'active']]])

    --}}
@stop

@section('content')
    @livewire('list-subjects-table')
    
    @livewire('display-status')
@stop
