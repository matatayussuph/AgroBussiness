<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmLease extends Model
{
    use HasFactory;
    protected $table = 'rent_farm_tb';
    protected $guarded = [];
}
