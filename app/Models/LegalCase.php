<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    use HasFactory;
    protected $perpage = 5;

    protected $fillable =['number_file', 'type_case',
    'opening_date', 'current_status', 'description',
    'audience_id', 'hall_id', 'stage_id', 'customer_id', 'lawyer_id'];

    public function audience(){
        return $this->belongsTo(Audience::class);
    }

    public function hall(){
        return $this->belongsTo(Hall::class);
    }

    public function stage(){
        return $this->belongsTo(Stage::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function lawyer(){
        return $this->belongsTo(Lawyer::class);
    }
}
