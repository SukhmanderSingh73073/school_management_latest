@extends('adminlte::page')

@section('title', __('Create Students'))


@section('content_header')
    

    {{--
    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('students.index'), 'text'=> 'Students'],
        ['href'=> route('students.create'), 'text'=> 'create', 'active'],
    ]])
    --}}
@stop

@section('content') 
    @livewire('create-student-form')

    @livewire('display-status')
@stop
