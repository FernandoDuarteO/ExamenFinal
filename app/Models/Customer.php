<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['name', 'age', 'gender',
    'address', 'identification_card', 'phone_number',
    'place_birth', 'departments', 'country',
    'marital_status'];

    public function legalcase(){
        return $this->hasMany(LegalCase::class);
    }
}
