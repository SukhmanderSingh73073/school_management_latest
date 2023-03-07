@extends('scheduleslte::page')

@section('title', __("Edit $schedules->slug"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $schedules->slug") }}
    </h1>

   
@endsection

@section('content')

@livewire('edit-schedules-form', ['schedules' => $schedules])

@livewire('display-status')

@endsection
