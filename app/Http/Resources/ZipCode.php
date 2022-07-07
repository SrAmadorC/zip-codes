<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipCode extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "zip_code" => $this->zip_code ,
            "locality"  =>$this->locality,
            "federal_entity" => [
                "key" => $this->federal_entity->key,
                "name" => $this->federal_entity->name,
                "code"  => $this->federal_entity->code
            ],
            "settlements" => $this->settlements,
            "municipality" => [
                "key" => $this->municipality->key,
                "name" => $this->municipality->name
            ]
            
        ];
    }
}
