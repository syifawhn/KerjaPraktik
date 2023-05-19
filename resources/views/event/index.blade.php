@extends('layout/master')
@section('title', 'event')
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- ---------------------
                                                                                                                                                                                                                                            start Zero Configuration
                                                                                                                                                                                                                                        ---------------- -->
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-2"><a href="/barang/create" class="btn btn-primary">Simpan</a></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered text-nowrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>Penyelenggara</th>
                                    <th>Nama Event</th>
                                    <th>Jadwal Event</th>
                                    <th>Alamat Event</th>
                                    <th>Property</th>
                                    <th>Team</th>
                                    <th>Foto Event</th>
                                    <th>Harga</th>
                                    <th>DP</th>
                                    <th>Sisa</th>
                                </tr>
                                <!-- end row -->
                            </thead>
                            <tbody>
                                @foreach ($event as $item)
                                    <tr>
                                        <td>{{ $item->penyelenggara }}</td>
                                        <td>{{ $item->nama_event }}</td>
                                        <td>{{ $item->jadwal_event }} </td>
                                        <td>{{ $item->alamat_event }}</td>
                                        <td>{{ $item->property->nama_property }}</td>
                                        <td>{{ $item->team->nama_divisi }}</td>
                                        <td>{{ $item->foto_event }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->dp }}</td>
                                        <td>{{ $item->sisa }}</td>
                                        <td>

                                            <a href="/event/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('event.destroy', ['event' => $item->id]) }}"
                                                method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger border-0"
                                                    onclick="return confirm('Ingin Hapus ?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- start row -->


                                <!-- end row -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                                                                                                                                                                                                                                            end Zero Configuration
                                                                                                                                                                                                                                        ---------------- -->
        </div>
    </div>
@endsection
