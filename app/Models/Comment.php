<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "comments";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        
    ];
}
