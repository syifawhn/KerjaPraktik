@extends('layout/master')
@section('title', 'List Event')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <a href="{{ route('event.create') }}" class="btn btn-primary">Tambah</a></h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Penyelenggara</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Jadwal Event</th>
                        {{-- <th scope="col">Alamat Event</th> --}}
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataEvent as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->penyelenggara }}</td>
                            <td>{{ $item->nama_event }}</td>
                            <td>{{ $item->jadwal_event }}</td>
                            <td></td>
                            <td>

                                <a href="/event/view/{{ $item->id }}" class="btn btn-warning">View</a>
                                <a href="/event/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                <a href="/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
