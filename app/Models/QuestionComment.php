<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionComment extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "question_comments";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'comment_text',
        'question_id',
        'parent_id',
    ];
}
