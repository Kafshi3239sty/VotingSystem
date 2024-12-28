<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'PollingStationID',
        'PollingStationName',
        'county_id',
        'sc_id',
        'town_id'
    ];

    public function PresidingOfficer(){
        return $this->hasOne(PresidingOfficer::class);
    }

    public function County(){
        return $this->belongsTo(County::class);
    }

    public function SubCounty(){
        return $this->belongsTo(SubCounty::class);
    }

    public function Town(){
        return $this->belongsTo(Town::class);
    }
}
