@extends('adminlte::page')

@section('title', __("$incharge->name's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$incharge->name's profile") }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges'],
        ['href'=> route('incharges.show', $incharge->id), 'text'=> "View $incharge->name's profile", 'active'],
    ]])
@endsection

@section('content')

    @livewire('show-incharge-profile', ['incharge' => $incharge])

    @livewire('display-status')

    
@endsection
