@extends('adminlte::page')

@section('title', __("$classteacher->name's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$classteacher->name's profile") }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classteachers.index'), 'text'=> 'classteachers'],
        ['href'=> route('classteachers.show', $classteacher->id), 'text'=> "View $classteacher->name's profile", 'active'],
    ]])
@endsection

@section('content')

    @livewire('show-class-teacher-profile', ['classteacher' => $classteacher])

    @livewire('display-status')

    
@endsection
