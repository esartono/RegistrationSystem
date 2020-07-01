@extends('layouts.user')

@section('content')
<div class="header pb-8 pt-4">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row justify-content-md-center">
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                        <h1 class="text-white"><i class="ni ni-button-play"></i> STATUS</h1>
                    </div>
                    <div class="card-body">
                        @include('users.steps.'.auth()->user()->step)
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
