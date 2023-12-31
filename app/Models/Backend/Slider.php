<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Summary of sliderList
     * @return mixed
     */
    public function sliderList()
    {
        return Self::orderBy('id', 'desc')->get();
    }

    /**
     * Summary of sliderCreate
     * @param mixed $data
     * @return mixed
     */
    public function sliderCreate($data)
    {
        return Self::create($data);
    }

    /**
     * Summary of sliderupdate
     * @param mixed $data
     * @param mixed $slider
     * @return mixed
     */
    public function sliderupdate($data, $slider)
    {
        return $slider->update($data);
    }


    /**
     * Summary of deleteSlider
     * @param mixed $slider
     * @return mixed
     */
    public function deleteSlider($slider)
    {
        return $slider->delete();
    }
}
