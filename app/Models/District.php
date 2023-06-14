<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    protected $guarded;

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
    public function ward()
    {
        return $this->hasOne(Ward::class, 'id', 'region_id');
    }
}
