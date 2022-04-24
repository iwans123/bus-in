<?php

namespace App\Exports;

use App\Models\kedatangan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KedatanganExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $kedatangan = Kedatangan::join('vehicles', 'vehicles.id', '=', 'kedatangans.vehicle_id');
        return view('download-kedatangan', [
            'kedatangans' => $kedatangan->get(['vehicles.name_po',
                                                'vehicles.number_vehicle',
                                                'vehicles.trayek',
                                                'kedatangans.created_at',
                                                'kedatangans.jumlahPenumpang'])
        ]);
        // return kedatangan::all();
    }
}
