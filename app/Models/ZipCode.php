<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function settlements()
    {
        return $this->hasMany(Settlement::class);
    }

    public function federal_entity()
    {
        return $this->belongsTo(FederalEntity::class,'federal_entity_id');
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class,'municipality_id');
    }
}
