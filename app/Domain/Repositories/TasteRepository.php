<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Taste;
use Illuminate\Database\Eloquent\Collection;

class TasteRepository
{
    /**
     * Get all tastes.
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Taste::all();
    }

    /**
     * Get taste by id
     *
     * @param $id
     * @return Taste
     */
    public function getById($id) : Taste
    {
        return Taste::findOrFail($id);
    }

}
