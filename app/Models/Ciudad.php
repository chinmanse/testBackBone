<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudad';

    public function federalEntities(){
        return $this->hasMany(FederalEntity::class, 'id_ciudad', 'id');
    }

    public function settlements(){
        return $this->hasMany(Settlement::class, "id_ciudad", "id");
    }

    public function municipalities(){
        return $this->hasMany(Municipality::class, "id_ciudad", "id");
    }
}
