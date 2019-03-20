<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public $table = "newsletters";
    protected $fillable = [
        'id','file_name', 'path', 'created_at','updated_at'
    ];
}
