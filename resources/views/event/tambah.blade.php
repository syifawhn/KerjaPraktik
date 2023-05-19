@extends('layout/master')
@section('title', 'event')
@section('content')
    <form action="{{ route('event.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="property_id">
                @foreach ($property as $event)
                    <option value="{{ $event->id }}">{{ $event->nama_property }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="team_id">
                @foreach ($team as $event)
                    <option value="{{ $event > id }}">{{ $event->nama_divisi }}</option>
                @endforeach
            </select>
        </div>

        <button type="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
