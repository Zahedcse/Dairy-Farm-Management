<?php

namespace App\Http\Livewire;

use App\Models\Cow;
use Livewire\Component;

class Cowdetails extends Component
{
    public $selectedCow = null;
    public $selected = null;
    public $cowData = null;
    public function render()
    {
        return view('livewire.cowdetails',['data'=>Cow::all()]);
    }
    public function updatedSelectedCow($cow_id)
    {
        $this->cowData = Cow::where('id', $cow_id)->get();
    }
}
