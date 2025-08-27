<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =[
        'name',
        'age',
        'gender',
        'identification_card',
        'phone_number',
        'email',
        'professional_code',
        'place_birth',
        'department',
        'residence',
        'ethnicity',
        'address',
        'nationality',
        'country',
        'marital_status'
    ];

    public function legalcase(){
        return $this->hasMany(LegalCase::class);
    }
}
