<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Summary of serviceList
     * @return mixed
     */
    public function serviceList()
    {
        return Self::orderBy('id', 'desc')->get();
    }

    /**
     * Summary of serviceStore
     * @param mixed $data
     * @return mixed
     */
    public function serviceStore($data)
    {
        return Self::create($data);
    }

    /**
     * Summary of serviceUpdate
     * @param mixed $data
     * @param mixed $service
     * @return mixed
     */
    public function serviceUpdate($data, $service)
    {
        return $service->update($data);
    }


    /**
     * Summary of serviceDelete
     * @param mixed $slider
     * @return mixed
     */
    public function serviceDelete($slider)
    {
        return $slider->delete();
    }
}
