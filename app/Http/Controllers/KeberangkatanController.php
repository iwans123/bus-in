<?php

namespace App\Http\Controllers;

use App\Exports\KeberangkatanExport;
use App\Models\keberangkatan;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KeberangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keberangkatan = keberangkatan::select(['vehicles.name_po',
                                                'vehicles.number_vehicle',
                                                'vehicles.trayek',
                                                'keberangkatans.created_at',
                                                'keberangkatans.jumlahPenumpang'])
                                        ->join('vehicles', 'vehicles.id', '=', 'keberangkatans.vehicle_id')
                                        ->latest('keberangkatans.created_at');

        return view('dashboard.pergiBus.index',[
            'keberangkatans' => $keberangkatan->paginate(7)
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

        return view('dashboard.pergiBus.add', [
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

        keberangkatan::create($validateData);

        return redirect('dashboard/keberangkatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keberangkatan = keberangkatan::find($id);
        return view('dashboard.pergiBus.show', compact('keberangkatan'));
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
    public function add($id)
    {
        $vehicle = Vehicle::find($id);
        return view('dashboard.pergiBus.create', compact('vehicle'));
    }
    public function export(){
        return Excel::download(new KeberangkatanExport, 'Datakedatangan.xlsx');
    }
}
