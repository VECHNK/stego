<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_prog extends Model
{
    use HasFactory;

    protected $fillable = ['id','prog_name','is_portable','author',
    'type','extension','encryption','operating_system','creation_date'];
}
