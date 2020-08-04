@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    @livewire('user.avatar')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
