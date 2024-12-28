<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NationalID',
        'CandidateID',
        'VoterID',
        'FullNames',
        'politicalPartyID',
        'phone',
        'age',
        'email',
        'postion',
        'county_id',
        'sc_id',
        'town_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function politicalParty(){
        return $this->belongsTo(PoliticalParty::class);
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
