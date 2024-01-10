@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Selamat datang, para Pramuka!') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __('Selamat datang di portal absensi. Kita akan melakukan absensi untuk memastikan kehadiran dan keterlibatan setiap anggota Pramuka dalam kegiatan ini. Absensi adalah bagian penting dari kedisiplinan dan tanggung jawab kita sebagai anggota Pramuka.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
