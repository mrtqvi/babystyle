<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sku',
        'quantity',
        'product_image',
        'price',
        'frozen_number',
        'sold_number',
        'is_default'
    ];


    protected $appends = ['price_with_discount'];

    protected $with = ['variationOptions'];

    // mutators 
    public function setQuantityAttribute($value)
    {
        $product = request()->product;

        if (isset($product)) {
            if (isset($this->id)) {
                // updated
                $updateProductQty = (int) $value + ($product->quantity - $this->quantity);

                $product->update([
                    'quantity' => $updateProductQty
                ]);
            } else {
                $product->update([
                    'quantity' => $product->quantity += (int) $value
                ]);
            }

        }
        
        $this->attributes['quantity'] = $value;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // relations 
    public function variationOptions()
    {
        return $this->belongsToMany(VariationOption::class, 'product_variation_options');
    }

    public function getImageAttribute()
    {
        return $this->product_image ?? "defaults/no-image.jpg";
    }

    public function discounts()
    {
        return $this->hasMany(ProductItemDiscount::class);
    }

    public function hasDiscount()
    {
        return $this->discounts()->active()->exists();
    }

    public function getPriceWithDiscountAttribute()
    {
        if ($this->hasDiscount()) {
            $discountRate = $this->discounts()->active()->first()->discount_rate;
            $discountAmount = $this->price * ($discountRate / 100);
            return $this->price - $discountAmount;
        }
        return $this->price;
    }

    public function getDiscountInfoAttribute()
    {
        if (!$this->hasDiscount()) {
            return false;
        }

        $discountRate = $this->discounts()->active()->first()->discount_rate;

        $discountAmount = $this->price * ($discountRate / 100);

        $priceWithDiscount = $this->price - $discountAmount;

        return ['price' => $priceWithDiscount, 'rate' => $discountRate];
    }


    public function scopeDefault($query)
    {
        return $query->where('is_default', 1);
    }

    public function scopeMaxQty($query)
    {
        return $query->orderBy('quantity', 'desc');
    }

    // set sku
    public static function generateSKU()
    {
        $sku = "BBY-" . rand(11111, 99999);

        while (ProductItem::where('sku', $sku)->exists()) {
            $sku = "BBY" . rand(11111, 99999);
        }

        return $sku;
    }
}
