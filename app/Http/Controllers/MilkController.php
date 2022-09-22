<?php
namespace App\Http\Controllers;

use App\Models\Milk;
use Illuminate\Http\Request;
use App\Models\Cow;
use Illuminate\Support\Facades\DB;

class MilkController extends Controller
{
    public function index(Milk $milk)
    {
        $milks = DB::table('milks')
            ->join('cows', 'milks.cow_id', '=', 'cows.id')
            ->select('milks.*', 'cows.name', 'cows.gender')
            // ->where('cows.gender', '=','Female')
            ->get();
        // dd($milks);
        return view('milk.index', ['milks' => $milks]);
    }


    public function create()
    {
        $cows = DB::table('cows')
        ->select('cows.name', 'cows.id')
        ->where('cows.gender', '=', 'Female')
        ->get();
        return view('milk.create', ['cows' => $cows]);
    }


    public function store(Request $request, Milk $milk)
    {
        $milk->date_recorded = date('Y-m-d');
        $milk->fill($request->post())->save();
        return redirect()->route('milk.index')->with('msg', 'Data saved successfully');
    }

    public function edit(Milk $milk)
    {
        $milk = DB::table('milks')
            ->join('cows', 'milks.id', '=', 'cows.id')
            ->select('milks.*', 'cows.name')
            ->get();
        return view('milk.edit', ['milk' => $milk]);
    }

    public function update(Request $request, Milk $milk)
    {
        //
    }

    
    public function destroy(Milk $milk)
    {
        $milk->delete();
        return redirect()->route('milk.index')->with('del', 'Data Deleted successfully');
    }
}
