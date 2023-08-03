<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "posts";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'post_text',
        'user_id',
    ];}
