<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use App\Models\Vehicle;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

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


        if ($verifikasi == true) {
            Vehicle::where('id', request('vehicle_id'))
                ->update(array('firstStatus' => true));
        }else{
            Vehicle::where('id', request('vehicle_id'))
                ->update(array('firstStatus' => false, 'secondStatus' => false));
        }



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
