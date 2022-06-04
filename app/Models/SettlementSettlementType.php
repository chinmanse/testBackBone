<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettlementSettlementType extends Model
{
    use HasFactory;
    protected $table = 'settlement_settlement_type';

    public function settlement(){
        return $this->belongsTo(Settlement::class, 'id_settlement', 'id');
    }

    public function sttlementType(){
        return $this->belongsTo(SettlementType::class, 'id_settlement_type', 'id');
    }
}
