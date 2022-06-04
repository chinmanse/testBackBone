<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;
    protected $table = 'settlements';

    public function settlementSettlementTypes(){
        return $this->hasMany(SettlementSettlementType::class, 'id_settlement', 'id');
    }
}
