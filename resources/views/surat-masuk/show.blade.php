@extends('layouts.app')

@section('content')
<h1>Detail Surat Masuk</h1>

<p><strong>Nomor Surat:</strong> {{ $surat->nomor_surat }}</p>
<p><strong>Tanggal:</strong> {{ $surat->tanggal }}</p>
<p><strong>Pengirim:</strong> {{ $surat->pengirim }}</p>
<p><strong>Perihal:</strong> {{ $surat->perihal }}</p>

<a href="{{ url('/surat-masuk') }}">Kembali</a>
@endsection
