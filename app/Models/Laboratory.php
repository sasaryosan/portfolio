<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;
    
     public function university()   
    {
        return $this->belongsTo(University::class);  
    }
    
     public function major()   
    {
        return $this->belongsTo(Major::class);  
    }
    
     public function bookmarks()   
    {
        return $this->hasMany(Bookmark::class);  
    }
    
     public function posts()   
    {
        return $this->hasMany(Post::class);  
    }
}
