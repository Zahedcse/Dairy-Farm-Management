<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','semen_type','pregnancy_type','push_date','start_date','del_date','semen_cost','other_cost','total','note'
    ];
}
