<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'color', 'user_id'];


    public $colors = ['Gray', 'Blue', 'Red', 'Green', 'Yellow'];

    public function getAllColors()
    {
        return $this->colors;
    }

}
