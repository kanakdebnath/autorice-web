<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];



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
}
