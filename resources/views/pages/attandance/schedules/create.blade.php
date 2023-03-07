@extends('adminlte::page')

@section('title', __('Create schedules'))


@section('content_header')
    <h1 class=" ">
        {{ __('Create schedules') }}
    </h1>

  

@stop

@section('content') 
    @livewire('create-schedules-form')

    @livewire('display-status')
@stop
