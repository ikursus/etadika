@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">

                    @include('layouts/alerts')

<p>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
</p>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>

        <tr>
            <th>BIL</th>
            <th>NAMA</th>
            <th>TELEFON</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $orang )
        <tr>
            <td>{{ $bil++ }}</td>
            <td>{{ $orang->nama }}</td>
            <td>{{ $orang->telefon }}</td>
            <td>{{ $orang->email }}</td>
            <td>{{ ucwords( $orang->nama_role ) }}</td>
            <td>
                <a href="/users/{{ $orang->id }}/edit" class="btn btn-info btn-sm">Edit</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#user-{{ $orang->id }}">
                    Delete
                </button>

                <!-- Modal -->
                <form method="POST" action=" {{ route('users.destroy', ['id' => $orang->id]) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                <div class="modal fade" id="user-{{ $orang->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <li>Nama: {{ $orang->nama }}</li>
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

Jumlah: {{ $users->count() }} dari {{ $users->total() }} Pengguna

{{ $users->links() }}

</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('script')

@endsection
