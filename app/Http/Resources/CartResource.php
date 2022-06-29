<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'id' => $this->id,
            
            'produk' => [
                'name' => $this->produk->name,
                'price' => $this->produk->price,
                'image' => $this->produk->image,
                'background' => $this->produk->background,
            ],
        ];
    }
}
