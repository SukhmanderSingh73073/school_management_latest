@extends('adminlte::page')

@section('title', __('Create principle'))


@section('content_header')
    <h1 class=""> 
        {{ __('Create principle') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('principles.index'), 'text'=> 'principles'],
        ['href'=> route('principles.create'), 'text'=> 'create', 'active'],
    ]])

@stop

@section('content') 
    @livewire('create-principle-form')

    @livewire('display-status')
@stop
