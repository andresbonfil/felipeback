<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacione extends Model
{
    use HasFactory;
    protected $fillable = [
        'idc', 
        'idv', 
    ];
}
