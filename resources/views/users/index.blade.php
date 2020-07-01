@extends('layouts.app')

@push('css')
    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Users</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="datatables">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NPM</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Faculty</th>
                                    <th>Phone</th>
                                    <th>Step</th>
                                    <th>Verified</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
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

@push('js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('users') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false },
                    { data: 'npm', name: 'npm' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'faculty', name: 'faculty' },
                    { data: 'phone', name: 'phone' },
                    { data: 'step', name: 'step' },
                    { data: 'verified', name: 'verified' },
                    // { data: 'action', name: 'action', orderable: false }
                ]
            });
        });
    </script>
@endpush
