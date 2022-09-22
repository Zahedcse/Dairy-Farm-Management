<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calf;
use App\Models\Cow;
use Illuminate\Support\Facades\DB;

class CalfController extends Controller
{
    public function index(Calf $calf)
    {
        // $calves = Calf::all();
        $calves = DB::table('calves')
                ->join('cows', 'calves.cow_id', '=', 'cows.id')
                ->select('calves.*', 'cows.name')
                ->get();
        // dd($calves);
        return view('calf.index', ['calves' => $calves]);
    }
    public function create(Cow $cow)
    {
        $data = DB::table('cows')
                ->where('cows.gender', '=', 'Female')
                ->get();
        return view('calf.create', ['cows' =>$data]);
    }
    public function store(Calf $calf, Request $request)
    {
        $calf->fill($request->post())->save();
        return redirect()->route('calf.index')->with('msg', 'Data added successfully');
    }
    public function edit(Calf $calf, Cow $cow)
    {
        $cows = Cow::all();
        return view('calf.edit', ['calf' => $calf , 'cows' => $cows]);
    }
    public function update(Calf $calf, Request $request)
    {
        $calf->fill($request->post())->save();
        return redirect()->route('calf.index')->with('msg', 'Data Updated Successfully');
    }
    public function destroy(Calf $calf)
    {
        $calf->delete();
        return redirect()->route('calf.index')->with('delete', 'Data Deleted Successfully');
    }
}
