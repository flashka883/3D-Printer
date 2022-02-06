<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'path',
        'extention'
    ];
    
    public function getFullPathAttribute()
    {
        return "{$this->path}.{$this->extention}";
    }
}
