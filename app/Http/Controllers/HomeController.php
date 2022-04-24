<?php

namespace App\Http\Controllers;

use App\Exports\RamcheckExport;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi = Transaksi::join('vehicles', 'vehicles.id', '=', 'transaksis.vehicle_id')
                                ->join('verifikasis', 'verifikasis.id', '=', 'transaksis.verifikasi_id')
                                ->latest('transaksis.updated_at');
        return view('dashboard.index', [
            'transaksis' => $transaksi->get(['transaksis.updated_at',
                                            'vehicles.name_po',
                                            'vehicles.jenis_angkutan',
                                            'vehicles.trayek',
                                            'vehicles.number_vehicle',
                                            'transaksis.status_transaksi'])
        ]);
    }
    public function export(){
        return Excel::download(new RamcheckExport, 'DataRamcheck.xlsx');
    }
}
