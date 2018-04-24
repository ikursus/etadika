@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">

<p>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
</p>

<table class="table table-bordered table-hover">
    <thead>

        <tr>
            <th>BIL</th>
            <th>NAMA</th>
            <th>TELEFON</th>
            <th>EMAIL</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $orang )
        <tr>
            <td>{{ $orang['id'] }}</td>
            <td>{{ $orang['nama'] }}</td>
            <td>{{ $orang['telefon'] }}</td>
            <td>{{ $orang['email'] }}</td>
            <td>
                <a href="/users/{{ $orang['id'] }}/edit">Edit</a>
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
@endsection

@section('script')

@endsection
