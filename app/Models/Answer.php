<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "answers";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'answer_text',
        'question_id',
        'user_id',
    ];
}