<?php
namespace App\Http\Controllers;

use App\Models\catalog\VaccineCatalog;
use App\Models\Cow;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\BirthdayNotification;

class CowController extends Controller
{
    public function index(Cow $cow)
    {
        $cows = Cow::all();
        return view('cow.index', ['cows'=>$cows]);
    }
    public function create(VaccineCatalog $vaccine)
    {
        $vaccines = VaccineCatalog::all();
        return view('cow.create', ['vaccines'=>$vaccines]);
    }
    public function store(Request $request, Cow $cow)
    {
        // $cow->notifyAt(new BirthdayNotification($cow), Carbon::parse($cow->dob), ['cow' => $cow->dob]);
        $cow->notifyAt(new BirthdayNotification($cow), Carbon::parse($cow->dob));


        $cow->age = Carbon::parse($request->dob)->diff(Carbon::now())->format('%y y, %m m and %d d');
        $cow->fill($request->post())->save();
        return redirect()->route('cow.index')->with('success', 'Data Added Successfully');
    }
    public function show(Cow $cow)
    {
        return view('cow.show', ['cow' =>$cow]);
    }

    public function edit(Cow $cow)
    {
        return view('cow.edit', ['cow' => $cow]);
    }

    public function update(Request $request, Cow $cow)
    {
        $cow->age = Carbon::parse($request->dob)->diff(Carbon::now())->format('%y y,%m m and %d d');

        $cow->fill($request->post())->save();
        return redirect()->route('cow.index')->with('success', 'Data Updated successfully');
    }

    public function destroy(Cow $cow)
    {
        $cow->delete();
        return redirect()->route('cow.index')->with('del', 'Data Deleted successfully');
    }
    // public function notify(Cow $cow)
    // {
    //     $cow = Cow::first();
    //     $cow->notify(new BirthdayNotification($cow));
    // }
}
