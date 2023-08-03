<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "post_comments";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'comment_text',
        'post_id',
        'parent_id',
    ];
}
