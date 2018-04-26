@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Role: {{ $role->name }}</div>

                <div class="card-body">
                    @include('layouts/alerts')
                    {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}

                        @include('roles/form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
