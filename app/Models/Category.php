<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'color', 'user_id'];


    public $colors = ['gray', 'blue', 'red', 'green', 'yellow'];

    public function getAllColors()
    {
        return $this->colors;
    }

}
