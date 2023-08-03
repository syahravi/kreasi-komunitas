<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "questions";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'question_text',
        'user_id',
    ];
}