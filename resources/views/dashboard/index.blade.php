@extends('layout/master')
@section('content')
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light">Event</div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Penyelenggara</th>
                <th scope="col">Acara</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Status Pembayaran</th>
            </tr>
        </thead>
    </table>
@endsection
