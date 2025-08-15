<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['document_type',
    'description', 'file'];

    public function legalcase(){
        return $this->hasMany(LegalCase::class);
    }
}
