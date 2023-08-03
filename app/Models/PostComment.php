<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "questions";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        
    ];
}
