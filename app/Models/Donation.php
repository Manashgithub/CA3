<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'Donations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'paid_date', 'number','amount'];

    use HasFactory;
}
