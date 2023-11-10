<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'Inventorys';
    protected $primaryKey = 'id';
    protected $fillable = ['product', 'qty', 'category','contactperson','contactnumber'];

    use HasFactory;
}
