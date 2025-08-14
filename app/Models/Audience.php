<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['hearing_date', 'description', 'hall_id'];

    public function hall(){
        return $this->belongsTo(Hall::class);
    }

    public function legalcase(){
        return $this->hasMany(LegalCase::class);
    }
}
