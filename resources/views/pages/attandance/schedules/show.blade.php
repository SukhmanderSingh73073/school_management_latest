@extends('scheduleslte::page')

@section('title', __("$schedules->slug's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$schedules->slug's profile") }}
    </h1>

   
@endsection

@section('content')

    @livewire('show-schedules-profile', ['schedules' => $schedules])

    @livewire('display-status')

    
@endsection
