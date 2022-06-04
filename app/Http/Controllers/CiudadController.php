<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use App\Models\Ciudad;
use App\Models\FederalEntity;

class CiudadController extends Controller
{

    /**
     * Display a listing of the ciudad.
     * GET|HEAD /ciudads
     * @return mixed
     * 
     */

    public function getCity($zipCode){
        try{
            $result = [
                "zip_code" => null,
                "locality" => null,
                "federal_entity" => null,
                "settlements" => null,
                "municipality" => null
            ];
            $ciudad = Ciudad::where("zip_code", $zipCode)->first();
            $federalEntities = $ciudad->federalEntities->first();
            $settlements = $ciudad->settlements;
            $municipalities = $ciudad->municipalities->first();

            $result["zip_code"] = $ciudad->zip_code;
            $result["locality"] = $this->textFormat($ciudad->locality);

            $result["federal_entity"] = [
                "key" => (int)$federalEntities->clave,
                "name" => $this->textFormat($federalEntities->name),
                "code" => null,
            ];
            $result ["settlements"] = $this->setSettlementsStructure($settlements);

            $result ["municipality"] = [
                "key" => (int)$municipalities->clave,
                "name" => $this->textFormat($municipalities->name)
            ];
            
            return response()->json($result) ;
        }catch(\Exception $e){
            return response()->json(["error" => "Not found zip-code"], 500);
        }
    }

    public function textFormat($text){
        return strtoupper(iconv('utf-8','ASCII//IGNORE//TRANSLIT',$text));
    }

    public function setSettlementsStructure($settlements){
        $result = [];
        foreach($settlements as $settlement){
            $element = [
                "key" => (int)$settlement->clave,
                "name" => $this->textFormat($settlement->name) ,
                "zone_type" => $this->textFormat($settlement->zone_type) 
            ];
            
            $relation = $settlement->settlementSettlementTypes->first();
            $settlementType = $relation->sttlementType;
            $element["settlement_type"] = [
                "name" => $settlementType->name
            ];
            array_push($result, $element);
        }
        return $result;
    }
}
