@extends('layout/master')
@section('title', 'event')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Nama Penyelenggara</th>
                        <td scope="col">{{ $event->penyelenggara }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Event</th>
                        <td>{{ $event->nama_event }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Jadwal Event</th>
                        <td>{{ $event->jadwal_event }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Property</th>
                        <td>{{ $event->property }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Team</th>
                        <td>{{ $event->team }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Harga</th>
                        <td>{{ $event->harga }}</td>
                    </tr>
                    <tr>
                        <th scope="row">DP</th>
                        <td>{{ $event->dp }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Sisa</th>
                        <td>{{ $event->sisa }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status Pembayaran</th>
                        <td>{{ $event->status_pembayaran }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="card-title">
                <div class="d-flex">
                    <a class="btn btn-primary" href="{{ route('event.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
