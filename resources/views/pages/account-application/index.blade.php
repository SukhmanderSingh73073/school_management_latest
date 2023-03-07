@extends('adminlte::page')

@section('title', __('Account Applications'))


@section('content_header')
   
@stop

@section('content') 
    @livewire('list-account-applications-table')
    
    @livewire('display-status')
@stop
