@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    {{-- <div class="col-lg-4 col-md-3">
        <div class="card h-50">
          <div class="card-body p-3">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                  <div class="avatar avatar-xl position-relative">
                    <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  </div>
                </div>
            </div>
            <div class="row gx-4 mb-2">
                <div class="col-auto my-auto">
                  <div class="h-100">
                    <h5 class="mb-1">
                      {{ $vehicle->driver }}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                      CEO / Co-Founder
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div> --}}
    <div class="mb-md-0 mb-4">
        <div class="card px-5">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                          <h5 class="mb-1">
                            {{ $vehicle->driver }}
                          </h5>
                          <p class="mb-0 font-weight-normal text-sm">
                            CEO / Co-Founder
                          </p>
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    {{-- <div class="input-group input-group-outline my-3">
                      <label for="date" class="form-label">{{ $vehicle->update_at }}</label>
                      <input class="form-control" id="date" name="update_at" disabled>
                    </div> --}}
                    <div class="input-group input-group-static my-3">
                        <label for="lahir">Update At</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->update_at }}" disabled>
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
                        <label for="lahir">Lokasi</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->location }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group input-group-static my-3">
                        <label for="lahir">Nama Lokasi</label>
                        <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->location_name }}" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            <label for="lahir">No Kendaraan</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->number_vehicle }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            <label for="lahir">Jenis Kendaraan</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->jenis_kendaraan }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            <label for="lahir">Tgl Lahir</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->birthday }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            <label for="lahir">No STUK</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->number_stuk }}" disabled>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                        {{-- <div class="input-group input-group-static my-3">
                            <label for="lahir">Nama Pengemudi</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->driver }}" disabled>
                        </div> --}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            <label for="lahir">Jenis Angkutan</label>
                            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->jenis_angkutan }}" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="input-group input-group-static my-3">
                              <label for="lahir">Trayek</label>
                              <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->trayek }}" disabled>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                  </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="mt-5 mb-md-0 mb-4">
        <div class="card px-5">
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <div class="mx-3">
                        <h2>Data Ramcheck</h2>
                    </div>
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Create_At</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Driver</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No_vehicle</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PO</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"></h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"></h6>
                                </div>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"></span>
                          </td>
                          <td class="align-middle">
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"></h6>
                                </div>
                            </div>
                          </td>
                          <td>
                              <div class="d-flex justify-content-center px-2 py-1">
                                  <a href="/dashboard/vehicles/">
                                      <button type="button" class="btn btn-info btn-sm mx-1">detail</button>
                                  </a>
                                </form>
                              </div>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
