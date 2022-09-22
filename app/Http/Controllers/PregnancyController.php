<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pregnancy;
use Illuminate\Support\Carbon;
use App\Models\Cow;

class PregnancyController extends Controller
{
    public function index(Pregnancy $pregnancy)
    {
        $data = Pregnancy::all();
        return view('pregnancy.index', ['data'=>$data]);
    }
    public function create()
    {
        $cows = DB::table('cows')
                    ->select('cows.*')
                    ->where('cows.gender', '=', 'Female')
                    ->get();
        return view('pregnancy.create', ['cows' => $cows]);
    }
    public function store(Pregnancy $pregnancy, Request $request)
    {
        $pregnancy->del_date = Carbon::parse($request->start_date)->addDays(283)->toDateString('Y-M-D');
        $pregnancy->total = $request-> semen_cost+ $request->other_cost;
         
        $pregnancy->fill($request->post())->save();
        return redirect()->route('pregnancy.index')->with('msg', 'Data saved successfully');
    }
    public function edit(Pregnancy $pregnancy, Cow $cow)
    {
        $cow = Cow::all();
        return view('pregnancy.edit', ['pregnancy'=> $pregnancy , 'cows'=> $cow]);
    }
    public function update(Request $request, Pregnancy $pregnancy)
    {
        // $date = $request->start_date;
        $pregnancy->del_date = Carbon::parse($request->start_date)->addDays(283)->toDateString();
        $pregnancy->total = $request-> semen_cost+ $request->other_cost;
         
        $pregnancy->fill($request->post())->save();
        return redirect()->route('pregnancy.index')->with('msg', 'Data Updated successfully');
    }
    public function destroy(Pregnancy $pregnancy)
    {
        $pregnancy->delete();
        return redirect()->route('pregnancy.index')->with('del', 'Data Deleted Successfully');
    }
}
