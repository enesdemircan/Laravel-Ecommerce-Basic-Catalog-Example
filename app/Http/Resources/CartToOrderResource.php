<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Product;
class CartToOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
            $product = Product::find($this->product_id);
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            
            //'status' => $this->status,
    
            'piece' => $this->piece,
            'detail' => $this->detail,
            'product' => $product,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'deleted_at'  => $this->deleted_at,
            
        ];
      
    }
    


}
