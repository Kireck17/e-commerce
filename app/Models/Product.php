<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable=['name','description','quantity', 'trademark_id' ,'barcode'];
    

    //alcanze con el modelo Trademark
    public function mark()
    {
        return $this->belongsTo(Trademark::class);
    }

    //alcanze con el modelo Coupons_product
    public function coupon_product()
    {
        return $this->belongsTo(Coupon_product::class);
    }

    //alcanze con el modelo Coupons
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }


    //alcanze con el modelo Photos
    public function photo()
    {
        return $this->belongsToMany(Photo::class,'photo_product','photo_id', 'product_id');
    }

    //alcanze con el modelo Photo_product
    public function photo_product()
    {
        return $this->belongsTo(Photo_product::class);
    }

    //alcanze con el modelo Category_product
    public function category_product()
    {
        return $this->belongsTo(Category_product::class);
    }

    //alcanze con el modelo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //alcanze con el modelo Product_user
    public function product_user()
    {
        return $this->belongsTo(Product_user::class);
    }

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //alcanze con el modelo Order_detail
    public function order_det()
    {
        return $this->belongsTo(Order_detail::class);
    }

    //alcanze con el modelo Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
