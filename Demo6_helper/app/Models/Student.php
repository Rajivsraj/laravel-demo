<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private $fname;
    function setFnameAttribute($d){
        $this->attributes["fname"] = "Mr. ".$d;
    }

    function getFnameAttribute($d){
        $this->fname = $d;
        return "Hello ".$d;

    }

    function getEmailAttribute($d){
        return $this->fname.$d;
        return $d;

    }
}
