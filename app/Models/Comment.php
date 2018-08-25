<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['task_id', 'body'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
