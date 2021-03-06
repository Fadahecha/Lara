<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(Category::class);
        
    }

    public function phrase(){
    
            return $this->belongsToMany(Phrase::class);
        
    }
}
