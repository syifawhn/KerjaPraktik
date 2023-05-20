@extends('layout/master')
@section('title', 'team')
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- ---------------------
                                                                                                                                                                                                                                                                                start Zero Configuration
                                                                                                                                                                                                                                                                            ---------------- -->
            <div class="card">
                <div class="border-bottom title-part-padding">
                    {{-- <h4 class="card-title mb-2"><a href="/event/create" class="btn btn-primary">Add Property</a></h4> --}}
                    {{-- <button type="button" class="btn btn-outline-dark">Add Event</button> --}}
                    <a href="/team/create" class="btn btn-primary">Add Team</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered text-nowrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                </tr>
                                <!-- end row -->
                            </thead>
                            {{-- <tbody>
                                @foreach ($property as $property)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->divisi }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->no_handphone }}</td>
                                        <td>

                                            <a href="/property/{{ $property->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('property.destroy', ['property' => $property->id]) }}"
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
                            </tbody> --}}
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
