<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PassengersResources extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "first_name"=>$this->first_name,
            "last_name"=>$this->last_name,
            "birth_date"=>$this->birth_date,
            "document_number"=>$this->document_number,
            "place_from"=>$this->place_from,
            "place_back"=>$this->place_back,
        ];
    }
}
