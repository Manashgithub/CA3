<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Found extends Model
{
    protected $table = 'Founds';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile','age','contactperson'];

    use HasFactory;
}
