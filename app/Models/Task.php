<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['name', 'user_id', 'category_id', 'body', 'deadline', 'priority'];

    public $priorityTypes = ['low', 'mid', 'high'];

    public function getPriorityTypes() : array
    {
        return $this->priorityTypes;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
