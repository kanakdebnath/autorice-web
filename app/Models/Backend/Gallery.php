<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Summary of galleryPhotoAdd
     * @param mixed $data
     * @return Model|\Illuminate\Database\Eloquent\Builder
     */
    public function galleryPhotoAdd($data)
    {
        return Self::query()->create($data);
    }
}
