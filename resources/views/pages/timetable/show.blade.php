@extends('adminlte::page')

@section('title', __("View $timetable->name"))

@section('content_header')
    
@endsection

@section('content')
    <a href="{{route('timetables.print',$timetable->id)}}" class="btn btn-primary my-3">Print Timetable</a>
    @livewire('show-timetable', ['timetable' => $timetable])

    @livewire('display-status')

@endsection
