<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    const ACTIVE = 1;

    const INACTIVE = 0;

    const PERCENTAGE = 1;
    const FLOAT = 2;
    public function productList()
    {
        return Self::query()->latest()->get();
    }

    /**
     * Summary of productStore
     * @param mixed $data
     * @return Model|\Illuminate\Database\Eloquent\Builder
     */
    public function productStore($data)
    {
        return Self::query()->create($data);
    }


    /**
     * Summary of productUpdate
     * @param mixed $data
     * @param mixed $product
     * @return mixed
     */
    public function productUpdate($data, $product)
    {
        return $product->update($data);
    }

    /**
     * Summary of productDelete
     * @param mixed $product
     * @return mixed
     */
    public function productDelete($product)
    {
        return $product->delete();
    }
}
