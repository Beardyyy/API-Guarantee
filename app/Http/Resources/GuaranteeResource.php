<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuaranteeResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Guarantees',
            'attributes' => [
                'category_id' => $this->category_id,
                'company_id' => $this->company_id,
                'user_id' => $this->user_id,
                'starts' => $this->starts,
                'ends' => $this->ends,
                'thumbnail' => $this->thumbnail,
                'description' => $this->description,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
