@extends('adminlte::page')

@section('title', __("Edit $principle->name"))

@section('content_header')
  
@endsection

@section('content')

@livewire('edit-principle-form', ['principle' => $principle])

@livewire('display-status')

@endsection
