<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_as extends Model
{
    use HasFactory;

    protected $fillable = ['file_as_id','file_name','st_prog_name',
    'type','key_registry','size','SHA1','SHA256','MD5'];
}
