<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    
     public function laboratories()   
    {
        return $this->hasMany(Laboratory::class);  
    }
}
