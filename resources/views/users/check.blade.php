@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Users Detail</h3>
                            </div>
                        </div>
                    </div>
                    <table class="table align-items-center">
                        <tr>
                            <td>Full Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td>{{ $user->npm }}</td>
                        <tr>
                            <td>Faculty</td>
                            <td>{{ $user->faculty }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $user->phone }}</td>
                    </table>
                    <div class="card-footer py-4">
                        <a class="btn btn-sm btn-icon btn-danger text-white" href="{{ route('user.verify', $user->id) }}">
                            <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                            <span class="btn-inner--text">Click to Verify</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">ID Card</h3>
                            </div>
                        </div>
                    </div>
                    <img src="{{ url('storage/'.$user->file) }}" alt="" title="" />
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
