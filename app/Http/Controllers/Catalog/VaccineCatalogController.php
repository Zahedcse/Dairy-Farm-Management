<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\catalog\VaccineCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineCatalogController extends Controller
{
    public function index(VaccineCatalog $vaccineCatalog)
    {
        $data = VaccineCatalog::all();
        return view('catalogs.vaccines.index', ['vaccines' => $data]);
    }
    public function create()
    {
        return view('catalogs.vaccines.create');
    }
    public function store(VaccineCatalog $vaccineCatalog, Request $request)
    {
        $vaccineCatalog->fill($request->post())->save();
        return redirect()->route('vaccines.index')->with('msg', 'Data Created Successfully');
    }
    public function edit(VaccineCatalog $vaccine)
    {
        // $data = DB::table('vaccine_catalogs')
        //         ->select('vaccine_catalogs.*')
        //         ->get();
        // dd($data);
        
        return view('catalogs.vaccines.edit', ['vaccine' => $vaccine]);
    }
    public function update(VaccineCatalog $vaccine, Request $request)
    {
        $vaccine->fill($request->post())->save();
        return redirect()->route('vaccines.index')->with('msg', 'Data updated Successfully');
    }
    public function destroy(VaccineCatalog $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('vaccines.index')->with('del', 'Data Deleted successfully');
    }
}
