<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['url'];

    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\Models\Category');
    }
}
