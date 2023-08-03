<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    protected $table = "spaces";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        
    ];
}