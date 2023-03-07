@extends('adminlte::page')

@section('title', __("$principle->name's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$principle->name's profile") }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('principles.index'), 'text'=> 'principles'],
        ['href'=> route('principles.show', $principle->id), 'text'=> "View $principle->name's profile", 'active'],
    ]])
@endsection

@section('content')

    @livewire('show-principle-profile', ['principle' => $principle])

    @livewire('display-status')

    
@endsection
