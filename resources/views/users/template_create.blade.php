@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah User</div>

                <div class="card-body">
                    @include('layouts/alerts')
                    <form method="POST" action="{{ route('users.store') }}">
                    @include('users/form')
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
