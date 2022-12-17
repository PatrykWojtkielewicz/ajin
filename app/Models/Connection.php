<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $fillable = ['airplaneId', 'departureAirportId', 'arrivalAirportId', 'departureTime', 'arrivalTime', 'dayOfTheWeek'];
    public function airplane(){
        return $this->belongsTo(Airplane::class);
    }
    public function airport(){
        return $this->hasMany(Airport::class);
    }
}
