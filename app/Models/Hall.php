<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['room_name',
    'location_room', 'code_room', 'judge_id'];

    public function judge(){
        return $this->belongsTo(Judge::class);
    }

    public function audience(){
        return $this->hasMany(Audience::class);
    }

    public function legalcase(){
        return $this->hasMany(LegalCase::class);
    }
}
