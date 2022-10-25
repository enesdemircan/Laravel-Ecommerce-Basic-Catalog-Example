<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Product;
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
        $product = new ProductResource(Product::where('id',$this->product_id)->firstOrFail());
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'detail' => $this->detail, 
            'original_price' => (float) number_format($product->price * $this->piece,2,'.',''),
            'discount_amount' => (float) number_format((($product->price * $product->discount_rate)/100) * $this->piece,2,'.',''),
            'discount_price' => (float) number_format( ($product->price - ($product->price * $product->discount_rate)/100) * $this->piece,2,'.',''),
            //'status' => $this->status,
            'product_id' => $this->product_id,
            'piece' => $this->piece,
            'product' => $product,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'deleted_at'  => $this->deleted_at,
           
        ];
    }




}
