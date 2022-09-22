<?php

namespace App\Models\catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'vname','vdays','vrepeat','vdose','note'
    ];
}
