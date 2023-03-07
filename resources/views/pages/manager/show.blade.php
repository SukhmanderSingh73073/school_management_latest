@extends('adminlte::page')

@section('title', __("$manager->name's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$manager->name's profile") }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('managers.index'), 'text'=> 'managers'],
        ['href'=> route('managers.show', $manager->id), 'text'=> "View $manager->name's profile", 'active'],
    ]])
@endsection

@section('content')

    @livewire('show-manager-profile', ['manager' => $manager])

    @livewire('display-status')

    
@endsection
