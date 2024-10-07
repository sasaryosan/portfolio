<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    
    public function prefecture()   
    {
        return $this->belongsTo(Prefecture::class);  
    }
    
     public function laboratories()   
    {
        return $this->hasMany(Laboratory::class);  
    }
}
