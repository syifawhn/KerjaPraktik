@extends('layout.master')
@section('title', 'Add Event')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Penyelenggara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penyelenggara">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Event</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_event">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Jadwal Event</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="jadwal_event">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Alamat Event</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_event">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Property</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" id="propertySelect" onchange="loadPropertyTable()"
                            name="property[]">
                            <option value="">Pilih Property</option>
                            @foreach ($dataProperti as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_property }}</option>
                            @endforeach
                        </select>
                        <div id="propertyTableContainer"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" id="teamSelect" onchange="loadTeamTable()" name="divisi[]">
                            <option value="">Pilih Divisi</option>
                            @foreach ($dataDivisi as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                            @endforeach
                        </select>
                        <div id="teamTableContainer"></div>
                    </div>
                </div>
                {{-- <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto">
                    </div>
                </div> --}}
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">DP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="dp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Sisa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="sisa">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </form>
        </div>
    </div>

    <script>
        var propertyList = [];
        var teamList = [];

        function loadPropertyTable() {
            var propertySelect = document.getElementById("propertySelect");
            var tableContainer = document.getElementById("propertyTableContainer");

            // Check if propertySelect has a value selected
            if (propertySelect.value) {
                var property = {
                    value: propertySelect.value,
                    name: propertySelect.options[propertySelect.selectedIndex].text
                };

                propertyList.push(property);

                renderPropertyTable();
            }
        }

        function renderPropertyTable() {
            var tableContainer = document.getElementById("propertyTableContainer");

            // Create table element
            var table = document.createElement("table");
            table.classList.add("table");
            table.classList.add("table-bordered");

            // Create table header
            var tableHeader = document.createElement("thead");
            var headerRow = document.createElement("tr");
            var noHeaderCell = document.createElement("th");
            noHeaderCell.textContent = "No";
            var nameHeaderCell = document.createElement("th");
            nameHeaderCell.textContent = "Nama Property";
            var deleteHeaderCell = document.createElement("th");
            deleteHeaderCell.textContent = "Hapus";
            headerRow.appendChild(noHeaderCell);
            headerRow.appendChild(nameHeaderCell);
            headerRow.appendChild(deleteHeaderCell);
            tableHeader.appendChild(headerRow);
            table.appendChild(tableHeader);

            // Create table body
            var tableBody = document.createElement("tbody");
            for (var i = 0; i < propertyList.length; i++) {
                var property = propertyList[i];

                var bodyRow = document.createElement("tr");
                var noCell = document.createElement("td");
                noCell.textContent = i + 1;
                var nameCell = document.createElement("td");
                nameCell.textContent = property.name;
                var deleteCell = document.createElement("td");
                var deleteButton = document.createElement("button");
                deleteButton.classList.add("btn");
                deleteButton.classList.add("btn-danger");
                deleteButton.textContent = "Hapus";
                deleteButton.onclick = createDeletePropertyHandler(i);
                deleteCell.appendChild(deleteButton);
                bodyRow.appendChild(noCell);
                bodyRow.appendChild(nameCell);
                bodyRow.appendChild(deleteCell);
                tableBody.appendChild(bodyRow);
            }
            table.appendChild(tableBody);

            // Clear previous table
            tableContainer.innerHTML = "";

            // Append table to the container
            tableContainer.appendChild(table);
        }

        function createDeletePropertyHandler(index) {
            return function() {
                propertyList.splice(index, 1);
                renderPropertyTable();
            };
        }

        function loadTeamTable() {
            var teamSelect = document.getElementById("teamSelect");
            var tableContainer = document.getElementById("teamTableContainer");

            // Check if teamSelect has a value selected
            if (teamSelect.value) {
                var team = {
                    value: teamSelect.value,
                    name: teamSelect.options[teamSelect.selectedIndex].text
                };

                teamList.push(team);

                renderTeamTable();
            }
        }

        function renderTeamTable() {
            var tableContainer = document.getElementById("teamTableContainer");

            // Create table element
            var table = document.createElement("table");
            table.classList.add("table");
            table.classList.add("table-bordered");

            // Create table header
            var tableHeader = document.createElement("thead");
            var headerRow = document.createElement("tr");
            var noHeaderCell = document.createElement("th");
            noHeaderCell.textContent = "No";
            var nameHeaderCell = document.createElement("th");
            nameHeaderCell.textContent = "Nama Divisi";
            var deleteHeaderCell = document.createElement("th");
            deleteHeaderCell.textContent = "Hapus";
            headerRow.appendChild(noHeaderCell);
            headerRow.appendChild(nameHeaderCell);
            headerRow.appendChild(deleteHeaderCell);
            tableHeader.appendChild(headerRow);
            table.appendChild(tableHeader);

            // Create table body
            var tableBody = document.createElement("tbody");
            for (var i = 0; i < teamList.length; i++) {
                var team = teamList[i];

                var bodyRow = document.createElement("tr");
                var noCell = document.createElement("td");
                noCell.textContent = i + 1;
                var nameCell = document.createElement("td");
                nameCell.textContent = team.name;
                var deleteCell = document.createElement("td");
                var deleteButton = document.createElement("button");
                deleteButton.classList.add("btn");
                deleteButton.classList.add("btn-danger");
                deleteButton.textContent = "Hapus";
                deleteButton.onclick = createDeleteTeamHandler(i);
                deleteCell.appendChild(deleteButton);
                bodyRow.appendChild(noCell);
                bodyRow.appendChild(nameCell);
                bodyRow.appendChild(deleteCell);
                tableBody.appendChild(bodyRow);
            }
            table.appendChild(tableBody);

            // Clear previous table
            tableContainer.innerHTML = "";

            // Append table to the container
            tableContainer.appendChild(table);
        }

        function createDeleteTeamHandler(index) {
            return function() {
                teamList.splice(index, 1);
                renderTeamTable();
            };
        }
    </script>
@endsection
