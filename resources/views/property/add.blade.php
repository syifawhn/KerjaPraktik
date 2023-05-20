@extends('layout/master')
@section('title', 'property')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Property</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Property</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Property</label>
                    <div class="col-sm-10">
                        <input type="image" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <button type="simpan" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
