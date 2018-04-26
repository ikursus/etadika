@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Roles</div>

                <div class="card-body">

                    @include('layouts/alerts')

<p>
    <a href="{{ route('roles.create') }}" class="btn btn-primary">Tambah Role</a>
</p>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>

        <tr>
            <th>BIL</th>
            <th>ROLE</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $roles as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="/roles/{{ $item->id }}/edit" class="btn btn-info btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('script')

@endsection
