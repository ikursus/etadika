@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User: {{ $data->nama_pelajar }}</div>

                <div class="card-body">
                    @include('layouts/alerts')
                    <form method="POST" action="{{ route('permohonan.update', ['id' => $data->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        @include('permohonan/form')
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
