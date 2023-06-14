<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $guarded;

    public function districts()
    {
        return $this->hasMany(Distict::class, 'id', 'district_id');
    }
    public function wards()
    {
        return $this->hasMany(Ward::class, 'id', 'ward_id');
    }
}
