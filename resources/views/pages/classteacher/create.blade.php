@extends('adminlte::page')

@section('title', __('Create classteacher'))


@section('content_header')
    <h1 class=""> 
        {{ __('Create classteacher') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classteachers.index'), 'text'=> 'classteachers'],
        ['href'=> route('classteachers.create'), 'text'=> 'create', 'active'],
    ]])

@stop

@section('content') 
    @livewire('create-class-teacher-form')

    @livewire('display-status')
@stop
