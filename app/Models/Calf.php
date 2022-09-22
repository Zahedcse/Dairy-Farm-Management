<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calf extends Model
{
    use HasFactory;
    protected $fillable = [
        'cow_id','gender','cname','type','breed','h_obtain','dob','ob_date','status'
    ];
}
