
@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

<h1>Detail Surat Keluar</h1>

@if ($surat)

    <p>
        <strong>Nomor Surat:</strong>
        {{ $surat['nomor_surat'] }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $surat['tanggal'] }}
    </p>

    <p>
        <strong>Penerima:</strong>
        {{ $surat['penerima'] }}
    </p>

    <p>
        <strong>Perihal:</strong>
        {{ $surat['perihal'] }}
    </p>

@else

    <p>Surat tidak ditemukan.</p>

@endif

<a href="{{ route('surat-keluar.index') }}">
    Kembali
</a>

@endsection
