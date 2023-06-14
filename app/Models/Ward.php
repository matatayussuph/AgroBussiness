<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table = 'wards';
    protected $guarded;

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
    public function district()
    {
        return $this->hasOne(District::class, 'id', 'region_id');
    }
}
