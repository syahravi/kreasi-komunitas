<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionComment extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "question_comments";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'comment_text',
        'post_id',
        'parent_id',
    ];
}
