<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model
{
    use Uuids, SoftDeletes;
    protected $table = "spaces";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'space_name',
        'space_description',
    ];
}