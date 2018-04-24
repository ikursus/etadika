@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-center"><h1>Sistem e-tadika</h1></div>

                <div class="card-body text-center">

                    <p>Untuk pendaftaran akaun, <a href="{{ route('register') }}">klik sini.</a></p>
                    <p>Untuk login ke akaun anda, <a href="{{ route('login') }}">klik sini.</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
