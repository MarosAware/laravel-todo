<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name', 'color'];


    protected $colors = ['gray', 'blue', 'red', 'green', 'yellow'];

    public function getAllColors()
    {
        return $this->colors;
    }

}
