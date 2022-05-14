@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4 mx-3">
      <div class="card-transparant border border-success bg-after">
        <div class="d-flex">
            @hasanyrole('admin')
                <div class="mx-3">
                    <a href="/home/ramcheck" class="btn btn-success bg-gradient my-3 text-white fw-bold">Export</a>
                </div>
            @endhasanyrole
            <div class="">
                <button class="btn btn-warning bg-gradient mb-3 my-3 mx-3 text-white fw-bold" onclick='window.location.reload(true);'>Refresh</button>
            </div>
        </div>
        <div class=" px-0 pb-2 mx-2">
          <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark align-items-center mb-0">
              <thead>
                <tr class="bg-success bg-gradient">
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Tanggal</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Nama PO</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Jenis Angkutan</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Trayek</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No Kendaraan</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Kesimpulan</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Catatan</th>
                </tr>
              </thead>
              <tbody class="fw-bold" style="color: #413F42">
                  @foreach ($transaksis as $transaksi)
                  <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $loop->iteration }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 fw-bold">{{ $transaksi->created_at->toDateString() }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 fw-bold">{{ $transaksi->name_po }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                      <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $transaksi->jenis_angkutan }}</h6>
                          </div>
                      </div>
                    </td>
                    <td class="align-middle">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 fw-bold">{{ $transaksi->trayek }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 fw-bold">{{ $transaksi->number_vehicle }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        @if ($transaksi->status_firstVerifikasi == true && $transaksi->status_secondVerifikasi == true)
                            <h6 class="text-success fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg>
                                LAIK
                            </h6>
                        @else
                            <h6 class="text-danger fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                TIDAK LAIK
                            </h6>
                        @endif
                    </td>
                    <td>
                        @if ($transaksi->status_firstVerifikasi == true && $transaksi->status_secondVerifikasi == true)
                            <h6 class="fw-bold">DIIJINKAN OPERASIONAL</h6>
                        @else
                            <h6 class="fw-bold">TILANG DAN DILARANG OPERASIONAL</h6>
                        @endif
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="my-3 mx-3">
                {{ $transaksis->links() }}
            </div>
          </div>
        </div>
      </div>
    {{-- </div> --}}
    {{-- <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Orders overview</h6>
          <p class="text-sm">
            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">24%</span> this month
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-success text-gradient">notifications</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-danger text-gradient">code</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-info text-gradient">shopping_cart</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-warning text-gradient">credit_card</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-primary text-gradient">key</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-icons text-dark text-gradient">payments</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
