@extends('layouts/app')

@section('header')
<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection

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
<table class="table table-bordered table-hover" id="roles-table">
    <thead>

        <tr>
            <th>ID</th>
            <th>ROLE</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>

</table>

</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('script')
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
$(function() {
    $('#roles-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('roles.datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false }
        ]
    });
});
</script>
@endsection
