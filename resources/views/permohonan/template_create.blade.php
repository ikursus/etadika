@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permohonan Baru</div>

                <div class="card-body">
                    @include('layouts/alerts')
                    <form method="POST" action="{{ route('permohonan.store') }}" enctype="multipart/form-data">
                    @include('permohonan/form')
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
