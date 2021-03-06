<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Verifikasi;
use App\Models\Vehicle;
use App\Models\Penerangan;
use App\Models\Pengereman;
use App\Models\Badan_kendaraan;
use App\Models\Ban;
use App\Models\Perlengkapan;
use App\Models\Pengukur_kecepatan;
use App\Models\Wiper;
use App\Models\Tanggap_darurat;
use App\Models\Penerangan_penunjang;
use App\Models\Badankendaraan_penunjang;
use App\Models\Kapasitas_penunjang;
use App\Models\Perlengkapan_penunjang;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecondVerifikasiController extends Controller
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
        // $verifikasi = Verifikasi::with('vehicle')
        //                         ->where('status', true)
        //                         ->latest();

        $transaksi = Transaksi::select(['vehicles.number_vehicle',
                                        'vehicles.name_po',
                                        'vehicles.driver',
                                        'verifikasis.id',
                                        'verifikasis.created_at',
                                        ])
                                ->join('vehicles', 'vehicles.id', '=', 'transaksis.vehicle_id')
                                ->join('verifikasis', 'verifikasis.id', '=', 'transaksis.verifikasi_id')
                                ->where('transaksis.status_firstVerifikasi', true)
                                ->where('transaksis.status_transaksi', true)
                                ->latest('transaksis.updated_at');
        // $verifikasi = Verifikasi::join('vehicles', 'vehicles.id', '=', 'verifikasis.vehicle_id')
        //                         ->where('verifikasis.status', true)
        //                         ->latest('verifikasis.created_at');

        // $vehicle = Vehicle::latest();
        // $verifikasi = \DB::table('verifikasis')
        // ->select('verifikasis.status as status','vehicles.driver as driver')
        // ->join('vehicles','vehicles.id','=','verifikasis.id')
        // ->where(['verifikasis.status' => true])
        // ->groupBy('vehicle_id')
        // ->get();
        if(request('search')) {
            $transaksi->where('number_vehicle', 'like', '%' . request('search') . '%')->first();
        }
        // dd($verifikasi);
        return view('dashboard.secondVerifikasi.index', [
            'verifikasis' => $transaksi->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // sistem penerangan
        $penerangan = $request->validate([
            'verifikasi_id' => 'required',
            'lampuUtama_dekat' => 'required',
            'lampuUtama_jauh' => 'required',
            'sein_depan' => 'required',
            'sein_belakang' => 'required',
            'lampuRem' => 'required',
            'lampuMundur' => 'required'
        ]);

        if (
        request('lampuUtama_dekat') == 'menyala' &&
        request('lampuUtama_jauh') == 'menyala' &&
        request('sein_depan') == 'menyala' &&
        request('sein_belakang') == 'menyala' &&
        request('lampuRem') == 'menyala' &&
        request('lampuMundur') == 'menyala'
        )
        {
            $penerangan['status'] = true;
            $peneranganStatus = true;
        }else{
            $penerangan['status'] = false;
            $peneranganStatus = false;
        }

        Penerangan::create($penerangan);

        // sistem Pengereman
        $pengereman = $request->validate([
            'verifikasi_id' => 'required',
            'remUtama' => 'required',
            'remParkir' => 'required',
        ]);

        if (
        request('remUtama') == 'berfungsi' &&
        request('remParkir') == 'berfungsi'
        )
        {
            $pengereman['status'] = true;
            $pengeremanStatus = true;
        }else{
            $pengereman['status'] = false;
            $pengeremanStatus = false;
        }

        Pengereman::create($pengereman);

        // Badan Kendaraan
        $badanKendaraan = $request->validate([
            'verifikasi_id' => 'required',
            'kaca_depan' => 'required',
            'pintu_utama' => 'required',
        ]);

        if (
        request('kaca_depan') == 'baik' &&
        request('pintu_utama') == 'berfungsi'
        )
        {
            $badanKendaraan['status'] = true;
            $badanKendaraanStatus = true;
        }else{
            $badanKendaraan['status'] = false;
            $badanKendaraanStatus = false;
        }

        Badan_kendaraan::create($badanKendaraan);

        // Ban
        $ban = $request->validate([
            'verifikasi_id' => 'required',
            'ban_depan' => 'required',
            'ban_belakang' => 'required',
        ]);

        if (
        request('ban_depan') == 'laik' &&
        request('ban_belakang') == 'laik'
        )
        {
            $ban['status'] = true;
            $banStatus = true;
        }else{
            $ban['status'] = false;
            $banStatus = false;
        }

        Ban::create($ban);

        // Perlengkapan
        $perlengkapan = $request->validate([
            'verifikasi_id' => 'required',
            'sabukPengemudi' => 'required',
        ]);

        if (
        request('sabukPengemudi') == 'ada'
        )
        {
            $perlengkapan['status'] = true;
            $perlengkapanStatus = true;
        }else{
            $perlengkapan['status'] = false;
            $perlengkapanStatus = false;
        }

        Perlengkapan::create($perlengkapan);

        // Pengukur kecepatan
        $pengukurKecepatan = $request->validate([
            'verifikasi_id' => 'required',
            'pengukurKecepatan' => 'required',
        ]);

        if (
        request('pengukurKecepatan') == 'ada'
        )
        {
            $pengukurKecepatan['status'] = true;
            $pengukurKecepatanStatus = true;
        }else{
            $pengukurKecepatan['status'] = false;
            $pengukurKecepatanStatus = false;
        }

        Pengukur_kecepatan::create($pengukurKecepatan);

        // wiper
        $wiper = $request->validate([
            'verifikasi_id' => 'required',
            'wiper' => 'required',
        ]);

        if (
        request('wiper') == 'ada'
        )
        {
            $wiper['status'] = true;
            $wiperStatus = true;
        }else{
            $wiper['status'] = false;
            $wiperStatus = false;
        }

        Wiper::create($wiper);

        // Tanggap darurat
        $tanggapDarurat = $request->validate([
            'verifikasi_id' => 'required',
            'pintuDarurat' => 'required',
            'jendelaDarurat' => 'required',
            'alatPemecahkaca' => 'required',
        ]);

        if (
        request('pintuDarurat') == 'ada' &&
        request('jendelaDarurat') == 'ada' &&
        request('alatPemecahkaca') == 'ada'
        )
        {
            $tanggapDarurat['status'] = true;
            $tanggapDaruratStatus = true;
        }else{
            $tanggapDarurat['status'] = false;
            $tanggapDaruratStatus = false;
        }

        Tanggap_darurat::create($tanggapDarurat);

        // Sistem Penerangan Penunjang
        $peneranganPenunjang = $request->validate([
            'verifikasi_id' => 'required',
            'lampuPosisi_depan' => 'required',
            'lampuPosisi_belakang' => 'required',
        ]);

        if (
        request('lampuPosisi_depan') == 'menyala' &&
        request('lampuPosisi_belakang') == 'menyala'
        )
        {
            $peneranganPenunjang['status'] = true;
            $peneranganPenunjangStatus = true;
        }else{
            $peneranganPenunjang['status'] = false;
            $peneranganPenunjangStatus = false;
        }

        Penerangan_penunjang::create($peneranganPenunjang);

        // Badan Kendaraan Penunjang
        $badanPenunjang = $request->validate([
            'verifikasi_id' => 'required',
            'kacaSpion' => 'required',
            'klakson' => 'required',
            'lantaiTangga' => 'required',
        ]);

        if (
        request('kacaSpion') == 'sesuai' &&
        request('klakson') == 'ada' &&
        request('lantaiTangga') == 'baik'
        )
        {
            $badanPenunjang['status'] = true;
            $badanPenunjangStatus = true;
        }else{
            $badanPenunjang['status'] = false;
            $badanPenunjangStatus = false;
        }

        Badankendaraan_penunjang::create($badanPenunjang);

        // Kapasitas Tempat Duduk Penunjang
        $kapasitasPenunjang = $request->validate([
            'verifikasi_id' => 'required',
            'tempatDuduk' => 'required',
        ]);

        if (
        request('tempatDuduk') == 'sesuai'
        )
        {
            $kapasitasPenunjang['status'] = true;
            $kapasitasPenunjangStatus = true;
        }else{
            $kapasitasPenunjang['status'] = false;
            $kapasitasPenunjangStatus = false;
        }

        Kapasitas_penunjang::create($kapasitasPenunjang);

        // Perlengkapan Kendaraan Penunjang
        $perlengkapanPenunjang = $request->validate([
            'verifikasi_id' => 'required',
            'banCadangan' => 'required',
            'segitigaPengaman' => 'required',
            'dongkrak' => 'required',
            'pembukaRoda' => 'required',
            'lampuSenter' => 'required',
        ]);

        if (
        request('banCadangan') == 'ada' &&
        request('segitigaPengaman') == 'ada' &&
        request('dongkrak') == 'ada' &&
        request('pembukaRoda') == 'ada' &&
        request('lampuSenter') == 'ada'
        )
        {
            $perlengkapanPenunjang['status'] = true;
            $perlengkapanPenunjangStatus = true;
        }else{
            $perlengkapanPenunjang['status'] = false;
            $perlengkapanPenunjangStatus = false;
        }

        Perlengkapan_penunjang::create($perlengkapanPenunjang);

        // SECOND STATUS VEHICLE
        if  (
        $peneranganStatus == true &&
        $pengeremanStatus == true &&
        $badanKendaraanStatus == true &&
        $banStatus == true &&
        $perlengkapanStatus == true &&
        $pengukurKecepatanStatus == true &&
        $wiperStatus == true &&
        $tanggapDaruratStatus == true &&
        $peneranganPenunjangStatus == true &&
        $badanPenunjangStatus == true &&
        $kapasitasPenunjangStatus == true &&
        $perlengkapanPenunjangStatus == true){
            Transaksi::where('verifikasi_id', request('verifikasi_id'))
                ->update(array('status_secondVerifikasi' => true, 'status_transaksi' => false, 'penguji_name' => Auth::user()->name, 'penguji_nip' => Auth::user()->nip));
            // Verifikasi::where('id', request('verifikasi_id'))
            //     ->update(array('status' => false));
        }else{
            Transaksi::where('verifikasi_id', request('verifikasi_id'))
                ->update(array('status_secondVerifikasi' => false, 'status_transaksi' => false, 'penguji_name' => Auth::user()->name, 'penguji_nip' => Auth::user()->nip));
        }
        // Vehicle::where('id', request('vehicle_id'))
        //         ->update(array('secondStatus' => true));
        return redirect('dashboard/secondVerifikasis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verifikasi = Verifikasi::find($id);
        // $vehicle = Vehicle::where('id', $verifikasi->vehicle_id);
        return view('dashboard.secondVerifikasi.create', compact('verifikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
