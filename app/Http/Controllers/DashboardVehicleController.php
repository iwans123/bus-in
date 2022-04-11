<?php

namespace App\Http\Controllers;

use App\Models\Badan_kendaraan;
use App\Models\Badankendaraan_penunjang;
use App\Models\Ban;
use App\Models\Kapasitas_penunjang;
use App\Models\Penerangan;
use App\Models\Penerangan_penunjang;
use App\Models\Pengereman;
use App\Models\Pengukur_kecepatan;
use App\Models\Perlengkapan;
use App\Models\Perlengkapan_penunjang;
use App\Models\Tanggap_darurat;
use App\Models\Vehicle;
use App\Models\Verifikasi;
use App\Models\Wiper;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class DashboardVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('dashboard.vehicles.index', [
            "vehicles" => Vehicle::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'name_po' => 'required|max:255',
            'location' => 'required',
            'location_name' => 'required|max:255',
            'number_vehicle' => 'required',
            'jenis_kendaraan' => 'required',
            'driver' => 'required|max:255',
            'number_stuk' => 'required',
            'birthday' => 'required',
            'jenis_angkutan' => 'required',
            'trayek' => 'required|max:255',
            'firstStatus' => 'nullable',
            'secondStatus' => 'nullable'
        ]);

        Vehicle::create($validateData);

        return redirect('dashboard/vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        $verifikasi = Verifikasi::where('vehicle_id', $id)
                                ->latest();

        // unsur teknis utama
        $penerangan = Penerangan::join('verifikasis', 'verifikasis.id', '=', 'penerangans.verifikasi_id')
                                ->where('verifikasis.vehicle_id', $id)
                                ->latest('penerangans.created_at');
        $pengereman = Pengereman::join('verifikasis', 'verifikasis.id', '=', 'pengeremen.verifikasi_id')
                                ->where('verifikasis.vehicle_id', $id)
                                ->latest('pengeremen.created_at');
        $badanKendaraan = Badan_kendaraan::join('verifikasis', 'verifikasis.id', '=', 'badan_kendaraans.verifikasi_id')
                                        ->where('verifikasis.vehicle_id', $id)
                                        ->latest('badan_kendaraans.created_at');
        $ban = Ban::join('verifikasis', 'verifikasis.id', '=', 'bans.verifikasi_id')
                    ->where('verifikasis.vehicle_id', $id)
                    ->latest('bans.created_at');
        $perlengkapan = Perlengkapan::join('verifikasis', 'verifikasis.id', '=', 'perlengkapans.verifikasi_id')
                    ->where('verifikasis.vehicle_id', $id)
                    ->latest('perlengkapans.created_at');
        $pengukurKecepatan = Pengukur_kecepatan::join('verifikasis', 'verifikasis.id', '=', 'pengukur_kecepatans.verifikasi_id')
                                                ->where('verifikasis.vehicle_id', $id)
                                                ->latest('pengukur_kecepatans.created_at');
        $wiper = Wiper::join('verifikasis', 'verifikasis.id', '=', 'wipers.verifikasi_id')
                        ->where('verifikasis.vehicle_id', $id)
                        ->latest('wipers.created_at');
        $tanggapDarurat = Tanggap_darurat::join('verifikasis', 'verifikasis.id', '=', 'tanggap_darurats.verifikasi_id')
                                        ->where('verifikasis.vehicle_id', $id)
                                        ->latest('tanggap_darurats.created_at');

        // unsur teknis penunjang
        $peneranganPenunjang = Penerangan_penunjang::join('verifikasis', 'verifikasis.id', '=', 'penerangan_penunjangs.verifikasi_id')
                                                    ->where('verifikasis.vehicle_id', $id)
                                                    ->latest('penerangan_penunjangs.created_at');
        $badanKendaraanPenunjang = Badankendaraan_penunjang::join('verifikasis', 'verifikasis.id', '=', 'badankendaraan_penunjangs.verifikasi_id')
                                            ->where('verifikasis.vehicle_id', $id)
                                            ->latest('badankendaraan_penunjangs.created_at');
        $kapasitasPenunjang = Kapasitas_penunjang::join('verifikasis', 'verifikasis.id', '=', 'kapasitas_penunjangs.verifikasi_id')
                                                ->where('verifikasis.vehicle_id', $id)
                                                ->latest('kapasitas_penunjangs.created_at');
        $perlengkapanPenunjang = Perlengkapan_penunjang::join('verifikasis', 'verifikasis.id', '=', 'perlengkapan_penunjangs.verifikasi_id')
                                                        ->where('verifikasis.vehicle_id', $id)
                                                        ->latest('perlengkapan_penunjangs.created_at');
        return view('dashboard.vehicles.show',compact('vehicle'), [
            'verifikasis' => $verifikasi->get(),
            // unsur teknis utama
            'penerangans' => $penerangan->get(['penerangans.lampuUtama_dekat',
                                                'penerangans.lampuUtama_jauh',
                                                'penerangans.sein_depan',
                                                'penerangans.sein_belakang',
                                                'penerangans.lampuRem',
                                                'penerangans.lampuMundur']),
            'pengeremans' => $pengereman->get(['pengeremen.remUtama',
                                                'pengeremen.remParkir']),
            'badanKendaraans' => $badanKendaraan->get(['badan_kendaraans.kaca_depan',
                                                        'badan_kendaraans.pintu_utama']),
            'bans' => $ban->get(['bans.ban_depan',
                                'bans.ban_belakang']),
            'perlengkapans' => $perlengkapan->get(['perlengkapans.sabukPengemudi']),
            'pengukurKecepatans' => $pengukurKecepatan->get(['pengukur_kecepatans.pengukurKecepatan']),
            'wipers' => $wiper->get(['wipers.wiper']),
            'tanggapDarurats' => $tanggapDarurat->get(['tanggap_darurats.pintuDarurat',
                                                        'tanggap_darurats.jendelaDarurat',
                                                        'tanggap_darurats.alatPemecahkaca']),
            // unsur teknis penunjang
            'peneranganPenunjangs' => $peneranganPenunjang->get(['penerangan_penunjangs.lampuPosisi_depan',
                                                                'penerangan_penunjangs.lampuPosisi_belakang']),
            'badankendaraanPenunjangs' => $badanKendaraanPenunjang->get(['badankendaraan_penunjangs.kacaSpion',
                                                                'badankendaraan_penunjangs.klakson',
                                                                'badankendaraan_penunjangs.lantaiTangga']),
            'kapasitasPenunjangs' => $kapasitasPenunjang->get(['kapasitas_penunjangs.tempatDuduk']),
            'perlengkapanPenunjangs' => $perlengkapanPenunjang->get(['perlengkapan_penunjangs.banCadangan',
                                                                    'perlengkapan_penunjangs.segitigaPengaman',
                                                                    'perlengkapan_penunjangs.dongkrak',
                                                                    'perlengkapan_penunjangs.pembukaRoda',
                                                                    'perlengkapan_penunjangs.lampuSenter'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('dashboard.vehicles.edit',[
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $rules = [
            'name_po' => 'required|max:255',
            'location' => 'required',
            'location_name' => 'required|max:255',
            'number_vehicle' => 'required',
            'jenis_kendaraan' => 'required',
            'driver' => 'required|max:255',
            'number_stuk' => 'required',
            'birthday' => 'required',
            'jenis_angkutan' => 'required',
            'trayek' => 'required|max:255',
            'firstStatus' => 'nullable',
            'secondStatus' => 'nullable'
        ];

        $validateData = $request->validate($rules);

        Vehicle::where('id', $vehicle->id)
                ->update($validateData);

        return redirect('dashboard/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        Vehicle::destroy($vehicle->id);

        return redirect('dashboard/vehicles');
    }
    public function downloadPDF()
    {
        // view()->share('verifikasi', $verifikasi);
        // return 'berhasil';
        $verifikasi = Verifikasi::latest();
        return view('download-pdf', [
            'verifikasi' => $verifikasi->get()
        ]);
        // $vehicle = Vehicle::find(1);
        // $pdf = \PDF::loadView('download-pdf', [
        //     'verifikasi' => $verifikasi->get()
        // ]);
        // return $pdf->download('Data_Ramcheck.pdf');
    }
}
