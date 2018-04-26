@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Permohonan</div>

                <div class="card-body">

                    @include('layouts/alerts')

<p>
    <a href="{{ route('permohonan.create') }}" class="btn btn-primary">Tambah Permohonan</a>
</p>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>

        <tr>
            <th>BIL</th>
            <th>TARIKH PERMOHONAN</th>
            <th>NAMA PELAJAR</th>
            <th>NO. KP</th>
            <th>SIJIL LAHIR</th>
            <th>TARIKH LAHIR</th>
            <th>JANTINA</th>
            <th>STATUS</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $data as $item )
        <tr>
            <td>{{ $bil++ }}</td>
            <td>{{ $item->tarikh_permohonan }}</td>
            <td>{{ $item->nama_pelajar }}</td>
            <td>{{ $item->no_kp }}</td>
            <td>{{ $item->sijil_lahir }}</td>
            <td>{{ $item->tarikh_lahir }}</td>
            <td>{{ $item->jantina }}</td>
            <td>{{ $item->status }}</td>
            <td>

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
