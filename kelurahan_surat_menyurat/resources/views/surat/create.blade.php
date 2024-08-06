<!-- resources/views/surat/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Surat</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('surat.create') }}">
        @csrf
        <div class="form-group">
            <label for="nama_pemohon">Nama Pemohon</label>
            <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" required>
        </div>
        <div class="form-group">
            <label for="tujuan_surat">Tujuan Surat</label>
            <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Surat</button>
    </form>
</div>
@endsection
