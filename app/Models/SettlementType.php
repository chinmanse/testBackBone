<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettlementType extends Model
{
    use HasFactory;
    protected $table = 'settlement_type';

    public function settlementSettlementTypes(){
        return $this->hasMany(SettlementSettlementType::class, 'id_settlement_type', 'id');
    }
}
