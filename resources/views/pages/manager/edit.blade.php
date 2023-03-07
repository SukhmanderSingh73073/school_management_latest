@extends('adminlte::page')

@section('title', __("Edit $manager->name"))

@section('content_header')
   
@endsection

@section('content')

@livewire('edit-manager-form', ['manager' => $manager])

@livewire('display-status')

@endsection
