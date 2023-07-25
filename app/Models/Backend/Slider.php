<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sliderList()
    {
        return Self::orderBy('id', 'desc')->get();
    }

    public function sliderCreate($data)
    {
        return Self::create($data);
    }
}