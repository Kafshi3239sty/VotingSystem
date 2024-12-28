<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;
             /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'county_id'
    ];

    public function pollingStation(){
        return $this->hasMany(PollingStation::class);
    }

    public function County(){
        return $this->belongsTo(County::class);
    }

    public function Voters(){
        return $this->hasMany(Voter::class);
    }

    public function Candidates(){
        return $this->hasMany(Candidate::class);
    }
}
