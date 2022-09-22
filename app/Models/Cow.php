<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thomasjohnkane\Snooze\Traits\SnoozeNotifiable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\BirthdayNotification;
use Carbon\Carbon;

class Cow extends Model
{
    use HasFactory ,Notifiable, SnoozeNotifiable;
    protected $fillable = [
        'name','gender','type','breed','h_obtain','dob','ob_date','pregnant_status','milk_per_day','height','weight','next_preg_date','buying_price','vaccines','prev_vaccine'
    ];
    
    public function setVaccinesAttribute($value)
    {
        $this->attributes['vaccines'] = json_encode($value);
    }


    public function getvaccinesAttribute($value)
    {
        return $this->attributes['vaccines'] = json_decode($value);
    }

}
