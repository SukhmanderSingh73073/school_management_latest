@extends('adminlte::page')
@section('title', __('Create manager'))
@section('content_header')
@stop
@section('content') 
    @livewire('create-manager-form')

    @livewire('display-status')
@stop
