<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborates extends Model
{
    use HasFactory;
    protected $table='collaborates';
    protected $fillable= [
        'image',
        'name',
        'role',
        'des',
    ];
}
