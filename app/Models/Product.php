<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
  
    protected $fillable = [
        'name',
        'price',
        'discount_rate',
        'category_id'
    ];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'deleted_at' => 'datetime:d-m-Y H:i:s',
    ];

    public static function ProductList()
    {
    
    return DB::select('Select products.* from products 
    left join favorites on products.id = favorites.product_id
    left join categories on categories.id = products.category_id
    group by products.id
    order by COUNT(favorites.id) DESC, products.name ASC , categories.name ASC');
  
    }

    public function productCategory(){
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function productSingle($id){
        return Product::findOrFail($id)->first();
    }
  

}
