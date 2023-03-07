@extends('adminlte::page')

@section('title', __("Edit $incharge->name"))

@section('content_header')
   
@endsection

@section('content')

@livewire('edit-incharge-form', ['incharge' => $incharge])

@livewire('display-status')

@endsection
