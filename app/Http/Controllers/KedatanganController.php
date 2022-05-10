<?php

namespace App\Http\Controllers;

use App\Exports\KedatanganExport;
use App\Models\kedatangan;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KedatanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kedatangan = kedatangan::select(['vehicles.name_po',
                                        'vehicles.number_vehicle',
                                        'vehicles.trayek',
                                        'kedatangans.created_at',
                                        'kedatangans.jumlahPenumpang'])
                                ->join('vehicles', 'vehicles.id', '=', 'kedatangans.vehicle_id')
                                ->latest('kedatangans.created_at');
        // $kedatangan = kedatangan::latest();

        return view('dashboard.datangBus.index',[
            'kedatangans' => $kedatangan->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle = Vehicle::latest();

        if (request('search')){
            $vehicle->where('number_vehicle', 'like', '%' . request('search') . '%')->first();
        }

        return view('dashboard.datangBus.add', [
            "vehicles" => $vehicle->paginate(7)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'vehicle_id' => 'required',
            'jumlahPenumpang' => 'required',
        ]);

        kedatangan::create($validateData);

        return redirect('dashboard/kedatangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kedatangan = kedatangan::find($id);
        return view('dashboard.datangBus.show', compact('kedatangan'));
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
    public function add($id){
        $vehicle = Vehicle::find($id);
        return view('dashboard.datangBus.create', compact('vehicle'));
    }
    public function export(){
        return Excel::download(new KedatanganExport, 'Datakedatangan.xlsx');
    }
}
