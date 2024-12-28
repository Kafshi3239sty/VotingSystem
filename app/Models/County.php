<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name'
    ];

    public function pollingStation(){
        return $this->hasMany(PollingStation::class);
    }

    public function subCounty(){
        return $this->hasMany(SubCounty::class);
    }

    public function returningOfficer(){
        return $this->hasOne(ReturningOfficer::class);
    }

    public function Voters(){
        return $this->hasMany(Voter::class);
    }

    public function Candidates(){
        return $this->hasMany(Candidate::class);
    }
}
