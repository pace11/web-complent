<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ComplentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int) $this->id,
            'users' => [
                'id' => $this->users['id'],
                'fullName' => $this->users['full_name'],
                'email' => $this->users['email'],
                'handphone' => $this->users['handphone'],   
                'fullName' => $this->users['full_name'],
                'fullAddress' => $this->users['full_address'],                
            ],
            'leadTechnician' => [
                'id' => $this->leadTechnician['id'],
                'fullName' => $this->leadTechnician['full_name'],
                'email' => $this->leadTechnician['email'],
                'handphone' => $this->leadTechnician['handphone'],   
                'fullName' => $this->leadTechnician['full_name'],
                'fullAddress' => $this->leadTechnician['full_address'],
            ],
            'technician' => [
                'id' => $this->technician['id'],
                'fullName' => $this->technician['full_name'],
                'email' => $this->technician['email'],
                'handphone' => $this->technician['handphone'],   
                'fullName' => $this->technician['full_name'],
                'fullAddress' => $this->technician['full_address'],
            ],
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}
