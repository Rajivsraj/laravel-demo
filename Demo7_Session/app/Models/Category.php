<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    function sub_category_rel(){
        return $this->hasMany(Subcategory::class);
    }
}
