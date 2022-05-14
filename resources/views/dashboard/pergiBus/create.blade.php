@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="mt-5 mb-md-0 mb-4">
        <div class="card border-success container px-5 my-3">
            <div class="card-body px-0 pb-2">
                <div class="row">
                    <div class="col-md mx-1">
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    1
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Hari Tanggal:
                                </span>
                            </div>
                            <div class="col">
                                <span>
                                    {{ $vehicle->updated_at->toDateString() }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    2
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Lokasi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->location }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    3
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama Lokasi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->location_name }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    4
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama Pengemudi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->driver }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    5
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Umur:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->birthday }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mx-1">
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    6
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama PO:
                                </span>
                            </div>
                            <div class="col">
                                <span>
                                    {{ $vehicle->name_po }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    7
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    No Kend:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->number_vehicle }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    8
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    No STUK:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->number_stuk }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    9
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Jenis Trayek:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->jenis_angkutan }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark text-truncate">
                                <span>
                                    10
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Trayek:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->trayek }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-success container p-5 my-3">
            <div class="">
                <h3>
                    Form Keberangkatan Bus
                </h3>
            </div>
            <form method="post" action="/dashboard/keberangkatan">
                @csrf
                <div>
                    <input name="vehicle_id" type="hidden" class="form-control" value="{{ $vehicle->id }}">
                </div>
                <div class="my-3">
                    <label>Jumlah Penumpang</label>
                    <input name="jumlahPenumpang" type="number" class="form-control @error('jumlahPenumpang')
                        is-invalid
                    @enderror" placeholder="Masukkan jumlah penumpang" value="{{ old('jumlahPenumpang') }}">
                    @error('jumlahPenumpang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mx-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
