<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['name', 'body', 'deadline', 'priority'];

    public $priorityTypes = ['low', 'mid', 'high'];

    public function getPriorityTypes() : array
    {
        return $this->priorityTypes;
    }

    public function categories()
    {
        return $this->hasOne('categories');
    }

}
