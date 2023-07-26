<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Summary of noticeList
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
    public function noticeList()
    {
        return Self::query()->latest()->get();
    }

    /**
     * Summary of noticeCreate
     * @param mixed $data
     * @return Model|\Illuminate\Database\Eloquent\Builder
     */
    public function noticeCreate($data)
    {
        return Self::query()->create($data);
    }

    /**
     * Summary of noticeUpdate
     * @param mixed $data
     * @param mixed $notice
     * @return mixed
     */
    public function noticeUpdate($data, $notice)
    {
        return $notice->update($data);
    }


    /**
     * Summary of noticeDelete
     * @param mixed $notice
     * @return mixed
     */
    public function noticeDelete($notice)
    {
        return $notice->delete();
    }
}
