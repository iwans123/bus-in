<?php

namespace App\Exports;

use App\Models\keberangkatan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KeberangkatanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $kedatangan = keberangkatan::join('vehicles', 'vehicles.id', '=', 'keberangkatans.vehicle_id');
        return view('download-kedatangan', [
            'kedatangans' => $kedatangan->get(['vehicles.name_po',
                                                'vehicles.number_vehicle',
                                                'vehicles.trayek',
                                                'keberangkatans.created_at',
                                                'keberangkatans.jumlahPenumpang'])
        ]);
        // return kedatangan::all();
    }
}
