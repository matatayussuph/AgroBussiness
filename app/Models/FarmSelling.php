<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmSelling extends Model
{
    use HasFactory;

    protected $table = 'sell_farm_tb';
    protected $guarded = [];
}
