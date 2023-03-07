@extends('adminlte::page')

@section('title', __("View $applicant->name's application"))

@section('content_header')
   
@endsection

@section('content')
    @livewire('show-account-application', ['applicant' => $applicant])

    @livewire('display-status')

@endsection
