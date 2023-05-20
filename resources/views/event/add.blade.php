@extends('layout/master')
@section('title', 'Add Event')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Penyelenggara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jadwal Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Property</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Team</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">DP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sisa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" name="penyelenggara" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jadwal Event</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Event</label>
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
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DP</label>
            <input type="text" class="form-control" name="dp" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sisa</label>
            <input type="text" class="form-control" name="sisa" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div> --}}

                    <button type="simpan" class="btn btn-primary">Simpan</button>
                </form>

        </div>
    </div>
@endsection
