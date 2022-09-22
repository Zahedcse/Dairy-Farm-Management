<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\Cow;
use Illuminate\Http\Request;
use App\Models\catalog\VaccineCatalog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VaccineController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index(Vaccine $vaccine, Cow $cow)
    {
        $vaccines = Vaccine::all();
        $cows = Cow::all();

        return view('vaccine.index', ['vaccines'=>$vaccines, 'cows'=>$cows]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create(Cow $cow, VaccineCatalog $vaccine)
    {
        $vaccine = VaccineCatalog::all();
        $cowData = Cow::get();
        return view('vaccine.create', ['cows' =>$cowData , 'vaccines'=>$vaccine]);
    }
    public function show()
    {
        // $data = Cow::where('id', 'cow_id')
        //             ->with('calves')
        //             ->get();
        //             Log::info($data);
        $data = DB::table('cows')
                ->join('calves', 'cows.id', '=', 'cow_id')
                ->select('cows.*', 'calves.*')
                ->get();
        // dd($data);
        return response()->json(
            ['data' => $data]
        );
    }
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request, Vaccine $vaccine)
    {
        $vaccine->fill($request->post())->save();
        return redirect()->route('vaccine.index')->with('msg', 'Data Created Successfully');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Vaccine  $vaccine
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Vaccine $vaccine)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Vaccine  $vaccine
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Vaccine $vaccine)
    {
        return view('vaccine.edit', ['vaccine' => $vaccine]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Vaccine  $vaccine
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, Vaccine $vaccine)
    {
        $vaccine->fill($request->post())->save();
        return redirect()->route('vaccine.index')->with('msg', 'Data Updated Successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Vaccine  $vaccine
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('vaccine.index')->with('del', 'Data Deleted successfully');
    }
}
