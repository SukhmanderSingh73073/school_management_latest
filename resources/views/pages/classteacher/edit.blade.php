@extends('adminlte::page')

@section('title', __("Edit $classteacher->name"))

@section('content_header')
   
@endsection

@section('content')

@livewire('edit-class-teacher-form', ['classteacher' => $classteacher])

@livewire('display-status')

@endsection
