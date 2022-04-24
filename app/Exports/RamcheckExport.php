<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RamcheckExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $transaksi = Transaksi::join('vehicles', 'vehicles.id', '=', 'transaksis.vehicle_id');
        return view('download-ramcheck', [
            'transaksis' => $transaksi->get(['transaksis.created_at',
                                                'vehicles.name_po',
                                                'vehicles.jenis_angkutan',
                                                'vehicles.trayek',
                                                'vehicles.number_vehicle',
                                                'transaksis.status_firstVerifikasi',
                                                'transaksis.status_secondVerifikasi',
                                                'transaksis.catatan'])
        ]);
        return transaksi::all();
    }
}
