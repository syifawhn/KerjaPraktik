@extends('layout/master')
@section('title', 'event')
@section('content')
    <form action="{{ route('event.update', ['event' => $event->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" id="exampleInputEmail1"
                value="{{ old('penyelenggara', $event->penyelenggara) }}" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('nama_event', $event->nama_event) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jadwal Event</label>
            <input type="text" class="form-control" name="jadwal_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('jadwal_event', $event->jadwal_event) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Event</label>
            <input type="text" class="form-control" name="alamat_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('alamat_event', $event->alamat_event) }}">

        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="property">
                @foreach ($property as $event)
                    <option value="{{ $event->id }}">{{ $event->nama_property }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="team">
                @foreach ($team as $event)
                    <option value="{{ $event->id }}">{{ $event->nama_divisi }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" name="Harga" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('harga', $event->harga) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DP</label>
            <input type="text" class="form-control" name="DP" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('dp', $event->dp) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sisa</label>
            <input type="text" class="form-control" name="Sisa" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('sisa', $event->sisa) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto Event</label>
            <input type="text" class="form-control" name="Foto Event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('fotohp', $event->fotohp) }}">

        </div>

        <button type="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
