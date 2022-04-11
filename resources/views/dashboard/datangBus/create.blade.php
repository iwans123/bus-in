@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-6 my-3">
        <div class="card px-5">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                      <h5 class="mb-1">
                        {{ $vehicle->driver }}
                      </h5>
                      <p class="mb-0 font-weight-normal text-sm">
                        Driver
                      </p>
                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="input-group input-group-static my-3">
                    <label for="lahir">Update At</label>
                    <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->update_at }}" disabled>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group input-group-static my-3">
                        <label for="lahir">Trayek</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->trayek }}" disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group input-group-static my-3">
                        <label for="lahir">PO</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->name_po }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group input-group-static my-3">
                          <label for="lahir">No Kendaraan</label>
                          <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->number_vehicle }}" disabled>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group input-group-static my-3">
                        <label for="lahir">Jenis Angkutan</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->jenis_angkutan }}" disabled>
                    </div>
                    </div>
            </div>
        </div>
        <div class="card p-5 my-3">
            <div class="">
                <h3>
                    Form Kedatangan Bus
                </h3>
            </div>
            <form method="post" action="/dashboard/kedatangan">
                @csrf
                <div>
                    <input name="vehicle_id" type="hidden" class="form-control" value="{{ $vehicle->id }}">
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Jumlah Penumpang</label>
                    <input name="jumlahPenumpang" type="number" class="form-control">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
