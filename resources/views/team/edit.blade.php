@extends('layout/master')
@section('title', 'team')
@section('content')
    <form action="{{ route('team.update', ['team' => $team->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                value="{{ old('nama', $team->nama) }}" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Divisi</label>
            <input type="text" class="form-control" name="divisi" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('divisi', $team->divisi) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('team', $team->email) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Handphone</label>
            <input type="text" class="form-control" name="no_handphone" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('team', $team->no_handphone) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto team</label>
            <input type="image" class="form-control" name="foto_team" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('foto_team', $team->foto_team) }}">

        </div>

        <button type="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
