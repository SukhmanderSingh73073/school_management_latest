@extends('adminlte::page')

@section('title', __('Classes'))

@section('content_header')
    
   {{--
    <h4>
        {{ __('Classes') }}
    </h4>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classes.index'), 'text'=> 'Classes' , 'active']
    ]])--}}
@endsection

@section('content')

    @livewire('list-classes-table')

    @livewire('display-status')
@endsection
