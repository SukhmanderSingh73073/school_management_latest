@extends('adminlte::page')

@section('title', __("Edit $applicant->name"))

@section('content_header')
   
@endsection

@section('content')

@livewire('edit-account-application-form', ['applicant' => $applicant])

@livewire('display-status')

@endsection
