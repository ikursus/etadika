@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Role</div>

                <div class="card-body">
                    @include('layouts/alerts')
                    <form method="POST" action="{{ route('roles.store') }}">
                    @include('roles/form')
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
