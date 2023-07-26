<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    const INACTIVE = 0;

    protected $guarded = [];


    /**
     * Summary of communicationList
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
    public function communicationList()
    {
        return Self::query()->latest()->get();
    }

    /**
     * Summary of communicationMemberAdd
     * @param mixed $data
     * @return Model|\Illuminate\Database\Eloquent\Builder
     */
    public function communicationMemberAdd($data)
    {
        return Self::query()->create($data);
    }

    /**
     * Summary of communicationMemberUpdate
     * @param mixed $data
     * @param mixed $communication
     * @return mixed
     */
    public function communicationMemberUpdate($data, $communication)
    {
        return $communication->update($data);
    }

    public function deleteCommunicationMember($communication)
    {
        return $communication->delete();
    }
}
