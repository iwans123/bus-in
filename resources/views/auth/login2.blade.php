@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- unsur teknis penunjang --}}
<div class="card-transparant border border-success px-2 my-3">
    <div class="my-3 mx-2">
        <h4>
            III. Unsur Teknis Penunjang
        </h4>
    </div>
    <div class="table-responsive bg-transparant mx-2 mb-3">
        <table class="table table-bordered border-dark align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">NO</th>
                <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">KRITERIA</th>
                <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success">DIIJINKAN OPEARASIONAL</th>
                <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger">TILANG & DILARANG OPERASIONAL</th>
            </tr>
        </thead>
        @if ($transaksis->count())
        <tbody class="fw-bold" style="color: #413F42">
            {{-- A. sistem penerangan penunjang --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">A</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Lampu posisi --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>16</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lampu Posisi</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- A.Depan --}}
            <tr>
            <td>
                <div class="d-flex px-2 py-1">

                </div>
            </td>
            <td>
                <p class="font-weight-bold mb-0">A.Depan</p>
            </td>
            <td class="align-middle">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1"
                    @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'menyala')
                        checked
                    @else
                        disabled
                    @endif>
                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                </div>
            </td>
            <td class="align-middle">
                <span>Tidak Menyala:</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                    @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kanan')
                        checked
                    @else
                        disabled
                    @endif>
                    <label class="custom-control-label" for="customRadio1">kanan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                    @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kiri')
                        checked
                    @else
                        disabled
                    @endif>
                    <label class="custom-control-label" for="customRadio1">kiri</label>
                </div>
            </td>
            </tr>
            {{-- B.Belakang --}}
            <tr>
                <td>
                <div class="d-flex px-2 py-1">

                </div>
                </td>
                <td>
                <p class="font-weight-bold mb-0">B.Belakang</p>
                </td>
                <td class="align-middle">
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1"
                        @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'menyala')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                </div>
                </td>
                <td class="align-middle">
                    <span>Tidak Menyala:</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                        @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kanan')
                                checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">kanan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                        @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kiri')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">kiri</label>
                    </div>
                </td>
            </tr>
            {{-- B. Badan Kendaraan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">B</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- kaca spion --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>17</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Kaca Spion</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->kacaSpion == 'sesuai')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Sesuai</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->kacaSpion == 'tidak sesuai')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                    </div>
                </td>
            </tr>
            {{-- Klakson --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>18</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Klakson</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->klakson == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->klakson == 'tidak fungsi')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->klakson == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Lantai dan Tangga --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>19</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lantai dan Tangga</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'baik')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">baik</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                        @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'keropos')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                    </div>
                </td>
            </tr>
            {{-- C. Kapasitas tempat duduk --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">C</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Jumlah Tempat Duduk --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>20</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Jumlah tempat duduk</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1"
                        @if ($kapasitasPenunjangs[0]->tempatDuduk == 'sesuai')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">sesuai</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                        @if ($kapasitasPenunjangs[0]->tempatDuduk == 'tidak sesuai')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                    </div>
                </td>
            </tr>
            {{-- D. Perlengkapan Kendaraan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">D</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Ban Cadangan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>21</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Ban Cadangan</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->banCadangan == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak laik')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Segitiga Pengaman --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>22</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Segitiga Pengaman</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Dongkrak --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>23</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Dongkrak</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->dongkrak == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->dongkrak == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Pembuka Roda --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>24</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Pembuka Roda</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Lampu Senter --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>25</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lampu Senter</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->lampuSenter == 'ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak fungsi')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                        @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak ada')
                            checked
                        @else
                            disabled
                        @endif>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
        </tbody>
        @else
        <tbody class="fw-bold" style="color: #413F42">
            {{-- A. sistem penerangan penunjang --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">A</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Lampu posisi --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>16</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lampu Posisi</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- A.Depan --}}
            <tr>
            <td>
                <div class="d-flex px-2 py-1">

                </div>
            </td>
            <td>
                <p class="font-weight-bold mb-0">A.Depan</p>
            </td>
            <td class="align-middle">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1"
                    disabled>
                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                </div>
            </td>
            <td class="align-middle">
                <span>Tidak Menyala:</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                    disabled>
                    <label class="custom-control-label" for="customRadio1">kanan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                    disabled>
                    <label class="custom-control-label" for="customRadio1">kiri</label>
                </div>
            </td>
            </tr>
            {{-- B.Belakang --}}
            <tr>
                <td>
                <div class="d-flex px-2 py-1">

                </div>
                </td>
                <td>
                <p class="font-weight-bold mb-0">B.Belakang</p>
                </td>
                <td class="align-middle">
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                </div>
                </td>
                <td class="align-middle">
                    <span>Tidak Menyala:</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">kanan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">kiri</label>
                    </div>
                </td>
            </tr>
            {{-- B. Badan Kendaraan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">B</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- kaca spion --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>17</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Kaca Spion</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Sesuai</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                    </div>
                </td>
            </tr>
            {{-- Klakson --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>18</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Klakson</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Lantai dan Tangga --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>19</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lantai dan Tangga</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">baik</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                    </div>
                </td>
            </tr>
            {{-- C. Kapasitas tempat duduk --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">C</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Jumlah Tempat Duduk --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>20</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Jumlah tempat duduk</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">sesuai</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                    </div>
                </td>
            </tr>
            {{-- D. Perlengkapan Kendaraan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span class="font-weight-bold text-dark">D</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                </td>
                <td></td>
                <td></td>
            </tr>
            {{-- Ban Cadangan --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>21</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Ban Cadangan</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Segitiga Pengaman --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>22</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Segitiga Pengaman</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Dongkrak --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>23</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Dongkrak</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Pembuka Roda --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>24</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Pembuka Roda</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
            {{-- Lampu Senter --}}
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <span>25</span>
                    </div>
                </td>
                <td>
                    <p class="font-weight-bold mb-0">Lampu Senter</p>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Ada</label>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                        disabled>
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                    </div>
                </td>
            </tr>
        </tbody>
        @endif
        </table>
    </div>
</div>

{{-- kesimpulan --}}
<div class="card border-success px-2 my-3">
    <div class="my-3 mx-2">
        <h4>
            KESIMPULAN
        </h4>
    </div>
    <div class="table-responsive mx-2">
        <table class="table table-bordered border-dark align-items-center mb-0">
            <thead>
                <tr>
                <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success bg-gradient">LAIK JALAN</th>
                <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger bg-gradient">TIDAK LAIK JALAN</th>
                <th class="text-center text-uppercase text-secondary text-xs text-truncate font-weight-bolder">CATATAN</th>
                </tr>
            </thead>
            @if ($transaksis->count())
            <tbody style="color: #413F42">
                <tr>
                    <td class="align-middle text-center border">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="customRadio1"
                            @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">DIIJINKAN OPERASIONAL</label>
                        </div>
                    </td>
                    <td class="align-middle text-center border">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="customRadio1"
                            @if ($transaksis[0]->status_firstVerifikasi == false || $transaksis[0]->status_secondVerifikasi == false)
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">TILANG DAN DILARANG OPERASIONAL</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                            <span>DIIJINKAN OPERASIONAL</span>
                        @else
                            <span>TILANG DAN DILARANG OPERASIONAL</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            @else
            <tbody style="color: #413F42">
                <tr>
                    <td class="align-middle text-center border">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="customRadio1"
                            disabled>
                            <label class="custom-control-label fw-bold" for="customRadio1">DIIJINKAN OPERASIONAL</label>
                        </div>
                    </td>
                    <td class="align-middle text-center border">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="customRadio1"
                            disabled>
                            <label class="custom-control-label fw-bold" for="customRadio1">TILANG DAN DILARANG OPERASIONAL</label>
                        </div>
                    </td>
                    <td class="align-middle">

                    </td>
                </tr>
            </tbody>
            @endif
        </table>
    </div>
    @if ($transaksis->count())
        <div class="row mt-2 mb-5">
            <h4>CATATAN KENDARAAN</h4>
            <div class="col">
                <span>wajib diisi :</span>
                <div class="card" style="width: 23rem; height: 15rem;">
                    <div class="card-body">
                        @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                            <p class="card-text">DIIJINKAN OPERASIONAL</p>
                        @else
                            <p class="card-text">TILANG DAN DILARANG OPERASIONAL</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <span>foto kerusakan :</span>
                <div class="card" style="width: 23rem; height: 15rem;">
                    <img src="{{ asset('upload/bukti/' . $transaksis[0]->image) }}" style="max-height: 15rem;" alt="">
                </div>
            </div>
        </div>
    @else
        <div class="row mt-2 mb-5 mx-2">
            <h4>CATATAN KENDARAAN</h4>
            <div class="col">
                <span>wajib diisi :</span>
                <div class="card" style="width: 23rem; height: 15rem;">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col">
                <span>foto kerusakan :</span>
                <div class="card" style="width: 23rem; height: 15rem;">

                </div>
            </div>
        </div>
    @endif
    @if ($transaksis->count())
        <div class="table-responsive card mb-3">
                <div class="row">
                        <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                            <div class="px-2 py-1">
                                <p>Catatan:
                                </p>
                                <p>
                                    Jika setiap unsur terdapat pelanggaran,
                                    maka sanksi yang dikenakan adalah sanksi yang paling berat
                                </p>
                            </div>
                        </div>
                        @if ($transaksis->count())
                        <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                            <div class="mb-auto px-2 py-1">
                                <h6>PENGEMUDI</h6>
                            </div>
                            <div class="px-2 py-1">
                                <h6>NAMA: {{ $transaksis[0]->driver }}</h6>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                            <div class="mb-auto px-2 py-1">
                                <h6>PENYEDIK PEGAWAI NEGERI SIPIL</h6>
                            </div>
                            <div class="px-2 py-1">
                                <h6>NIP: {{ $transaksis[0]->ppns_nip }}</h6>
                                <h6>NAMA: {{ $transaksis[0]->ppns_name }}</h6>
                            </div>
                        </div>
                        @endif
                        @if ($transaksis[0]->status_transaksi == false)
                        <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                            <div class="mb-auto px-2 py-1">
                                <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                            </div>
                            <div class="px-2 py-1">
                                <h6>NIP: {{ $transaksis[0]->penguji_nip }}</h6>
                                <h6>NAMA: {{ $transaksis[0]->penguji_name }}</h6>
                            </div>
                        </div>
                        @else
                        <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                            <div class="mb-auto px-2 py-1">
                                <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                            </div>
                            <div class="px-2 py-1">
                                <h6>NIP: </h6>
                                <h6>NAMA: </h6>
                            </div>
                        </div>
                        @endif
                </div>
        </div>
    @else
        <div class="table-responsive card mb-3 mx-2">
            <div class="row">
                    <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                        <div class="px-2 py-1">
                            <p>Catatan:
                            </p>
                            <p>
                                Jika setiap unsur terdapat pelanggaran,
                                maka sanksi yang dikenakan adalah sanksi yang paling berat
                            </p>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                        <div class="mb-auto px-2 py-1">
                            <h6>PENGEMUDI</h6>
                        </div>
                        <div class="px-2 py-1">
                            <h6>NAMA: </h6>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                        <div class="mb-auto px-2 py-1">
                            <h6>PENYEDIK PEGAWAI NEGERI SIPIL</h6>
                        </div>
                        <div class="px-2 py-1">
                            <h6>NIP: </h6>
                            <h6>NAMA: </h6>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                        <div class="mb-auto px-2 py-1">
                            <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                        </div>
                        <div class="px-2 py-1">
                            <h6>NIP: </h6>
                            <h6>NAMA: </h6>
                        </div>
                    </div>
                    <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                        <div class="mb-auto px-2 py-1">
                            <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                        </div>
                        <div class="px-2 py-1">
                            <h6>NIP: </h6>
                            <h6>NAMA: </h6>
                        </div>
                    </div>
            </div>
        </div>
    @endif
</div>
