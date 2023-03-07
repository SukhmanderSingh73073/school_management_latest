@extends('adminlte::page')

@section('title', __('Academic years'))

@section('content_header')
   
@endsection

@section('content')


    @livewire('list-academic-years-table')

    @livewire('display-status')
@endsection
