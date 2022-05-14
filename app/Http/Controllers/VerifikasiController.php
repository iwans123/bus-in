<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use App\Models\Vehicle;
use App\Models\Transaksi;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            "vehicles" => $vehicle->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        // return $request->file('image')->store('post-image');
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
            'catatan' => 'nullable',
            'image' => 'image|file',
            'ppns_name' => 'nullable',
            'ppns_nip' => 'nullable',
            'penguji_name' => 'nullable',
            'penguji_nip' => 'nullable'
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


        // upload gambar
        if ($request->image) {
            $date = date('H-i-s');
            $random = \Str::random(5);
            try {
                unlink($request->oldImage);
            } catch (\Throwable $th) {
            } finally {
                $request->file('image')->move('upload/bukti',$date . $random . $request->file('image')->getClientOriginalName());
                $transaksi['image'] = $date . $random . $request->file('image')->getClientOriginalName();
            }
        }

        $transaksi['ppns_name'] = Auth::user()->name;
        $transaksi['ppns_nip'] = Auth::user()->nip;
        $transaksi['penguji_name'] = "Ahmad Taqy Haydar";
        $transaksi['penguji_nip'] = "199906012021121002";

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
        $transaksi = Transaksi::select('transaksis.image')
                                ->where('vehicle_id', $id)
                                ->latest();

        $vehicle = Vehicle::find($id);
        return view('dashboard.firstVerifikasi.create', compact('vehicle'), [
            'transaksis' => $transaksi->get()
        ]);
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
