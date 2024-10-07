<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
     public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
     public function laboratory()   
    {
        return $this->belongsTo(Laboratory::class);  
    }
    
     public function comments()   
    {
        return $this->belongsTo(Comment::class);  
    }
}
