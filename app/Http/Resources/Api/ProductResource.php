<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'name'=> $this->name,
            'description' => $this->description,
            'purchasePrice' => $this->purchase_price,
            'sellingPrice' => $this->selling_price,
            'quantity' => $this->quantity,
            'categoryId' => $this->category_id,
        ];
    }
}
