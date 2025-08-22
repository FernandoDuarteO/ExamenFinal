<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Judge extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['name', 'age', 'gender',
    'identification_card', 'phone_number', 'email',
    'place_birth', 'department', 'residence', 'ethnicity', 'address', 'nationality', 'country',
    'marital_status'];

    public function hall(){
        return $this->hasMany(Hall::class);
    }
}
