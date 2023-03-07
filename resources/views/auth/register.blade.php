@extends('layouts.register')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col">
                <div class="col-md-12 m-auto ">
                    <x-jet-authentication-card-logo />
                </div>
                <div class="card shadow-sm px-1">
                    @livewire('user-registration-form')
                </div>
            </div>
        </div>
    </div>
    @livewire('display-status')
@endsection