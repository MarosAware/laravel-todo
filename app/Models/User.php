<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addCategory($category)
    {
        $this->categories()->save($category);
    }

    public function addTask($task)
    {
        $this->tasks()->save($task);
    }

}
