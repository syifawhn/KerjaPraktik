@extends('layout/master')
@section('title', 'property')
@section('content')
    <form action="{{ route('event.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Property</label>
            <input type="text" class="form-control" name="penyelenggara" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Property</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>

        <button type="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
