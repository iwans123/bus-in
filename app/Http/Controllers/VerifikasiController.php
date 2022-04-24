<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use App\Models\Vehicle;
use App\Models\Transaksi;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class VerifikasiController extends Controller
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
        $vehicle = Vehicle::latest();

        if(request('search')) {
            $vehicle->where('number_vehicle', 'like', '%' . request('search') . '%')->first();
        }

        return view('dashboard.firstVerifikasi.index', [
            "vehicles" => $vehicle->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.firstVerifikasi.create', [
        //     "verifikasis" => Verifikasi::all(),
        //     "vehicle" => Vehicle::all()
        // ]);
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
            'vehicle_id' => 'required',
            'kartu_uji' => 'required',
            'kp_reguler' => 'required',
            'kp_cadangan' => 'required',
            'sim_pengemudi' => 'required'
        ]);

        if (request('kartu_uji') == 'ada' && request('kp_reguler') == 'ada' && request('kp_cadangan') == 'ada' && request('sim_pengemudi') !== 'sim tidak sesuai') {
            $validateData['status'] = true;
            $verifikasi = true;
        }else{
            $validateData['status'] = false;
            $verifikasi = false;
        }

        Verifikasi::create($validateData);
        // STATUS VEHICLE VERIFIKASI 1

        // Vehicle::where('id', request('vehicle_id'))
        //         ->update(array('status' => false));


        // if ($verifikasi == true) {
        //     Vehicle::where('id', request('vehicle_id'))
        //         ->update(array('firstStatus' => true));
        // }else{
        //     Vehicle::where('id', request('vehicle_id'))
        //         ->update(array('firstStatus' => false, 'secondStatus' => false));
        // }

        // update status transaksi (progress transaksi) Transaksi
        Transaksi::select('status_transaksi')
                ->where('vehicle_id', request('vehicle_id'))
                ->update(array('status_transaksi' => false));

        // create Transakasi
        $transaksi = $request->validate([
            'vehicle_id' => 'required',
            'penerangan_id' => 'nullable',
            'pengereman_id' => 'nullable',
            'badanKendaraan_id' => 'nullable',
            'ban_id' => 'nullable',
            'perlengkapan_id' => 'nullable',
            'pengukurKecepatan_id' => 'nullanle',
            'wiper_id' => 'nullable',
            'tanggapDarurat' => 'nullable',
            'peneranganPenunjang_id' => 'nullable',
            'badanKendaraanPenunjang_id' => 'nullable',
            'kapasitasPenunjang' => 'nullable',
            'perlengkapanPenunjang' => 'nullable',
            'status_transaksi' => 'nullable',
            'status_firstVerifikasi' => 'nullable',
            'status_secondVerifikasi' => 'nullable',
            'catatan' => 'nullable'
        ]);
        $verifikasiTransaksi = Verifikasi::select('id')->latest()->first();
        $transaksi['verifikasi_id'] = $verifikasiTransaksi['id'];
        if ($verifikasi == true) {
            $transaksi['status_firstVerifikasi'] = true;
            $transaksi['status_transaksi'] = true;
        }else{
            $transaksi['status_firstVerifikasi'] = false;
            $transaksi['status_transaksi'] = true;
        }
        Transaksi::create($transaksi);



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
        return view('dashboard.firstVerifikasi.create', compact('vehicle'));
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
