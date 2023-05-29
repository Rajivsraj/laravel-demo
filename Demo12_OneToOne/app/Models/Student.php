<?php

namespace App\Models;

use Illuminate\Bus\Batch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    // function batche(): HasOne{
    //     return $this->hasOne(Batche::class);
    // }

    function batche(){
        return $this->hasMany(Batche::class);
    }
}
