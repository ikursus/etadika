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
                <a href="{{ route('permohonan.edit', ['id' => $item->id]) }}" class="btn btn-info btn-sm">
                    Edit
                </a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#item-{{ $item->id }}">
                    Delete
                </button>

                <!-- Modal -->
                    <form method="POST" action=" {{ route('permohonan.destroy', ['id' => $item->id])   }}">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <div class="modal fade" id="item-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Adakah anda ingin hapuskan rekod berikut:</p>
                            <ul>
                                <li>Nama Pelajar: {{ $item->nama_pelajar }}</li>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Sah Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
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
