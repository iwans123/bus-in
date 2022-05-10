@extends('dashboard.layouts.main')

@section('container')
<div class="card border-success container">
    <div class="row">
        <div class="border col-md-1">
            <span>NO.STUK</span>
        </div>
        <div class="border col">
            {{ $vehicle->number_stuk }}
        </div>
        <div class="border col-md-1">
            <span>NO.KEND</span>
        </div>
        <div class="border col">
            {{ $vehicle->number_vehicle }}
        </div>
    </div>
</div>
<form method="post" action="/dashboard/verifikasis" enctype="multipart/form-data">
    @csrf
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input name="vehicle_id" type="hidden" class="form-control hiden" value="{{ $vehicle->id }}">
    </div>
    <div class="card border-success container px-5">
        <div class="my-3">
            <h3>
                Unsur Adminisrasi
            </h3>
        </div>
        <div class="table-responsive card mb-3">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NO</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">KRITERIA</th>
                  <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success">DIIJINKAN OPEARASIONAL</th>
                  <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger">TILANG & DILARANG OPERASIONAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <span>1</span>
                    </div>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Kartu uji / STUK</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                    <div class="from-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak berlaku" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                    </div>
                    <div class="from-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                    </div>
                  </td>
                </tr>
                <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>2</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">KP. Reguler</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="ada" name="kp_reguler" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_reguler" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_reguler" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_reguler" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>3</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">KP.Cadangan</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="ada" name="kp_cadangan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_cadangan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_cadangan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_cadangan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>4</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">SIM Pengemudi</p>
                    </td>
                    <td class="align-middle text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="A umum" name="sim_pengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">A umum</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="B umum" name="sim_pengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">B umum</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="C umum" name="sim_pengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">C umum</label>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="sim tidak sesuai" name="sim_pengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">SIM tidak sesuai</label>
                        </div>
                    </td>
                  </tr>
              </tbody>
            </table>
        </div>
    </div>
    <div class="card border-success container my-2 px-5">
        <div class="my-3">
            <h3>
                Bukti Gambar
            </h3>
        </div>
        <div class="input-group my-3">
            @if ($transaksis->count())
                <input type="hidden" name="oldImage" value="{{ $transaksis[0]->image }}">
            @endif
            <input type="file" class="form-control" @error('image') is-invalid @enderror id="image" name="image" onchange="previewImage()">
            <label class="input-group-text" for="image">Upload Photo</label>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <img class="img-preview img-fluid my-2" style="max-width: 350px;">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
</form>

<script>

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
