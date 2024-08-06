<!-- resources/views/surat/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Verify Surats</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemohon</th>
                <th>Tujuan Surat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surats as $surat)
                <tr>
                    <td>{{ $surat->id }}</td>
                    <td>{{ $surat->nama_pemohon }}</td>
                    <td>{{ $surat->tujuan_surat }}</td>
                    <td>
                        <form method="POST" action="{{ route('surat.verify', $surat->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-success">Verify</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
