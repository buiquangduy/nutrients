<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\RecipeMethod;
use Illuminate\Database\Eloquent\Collection;

class RecipeMethodRepository
{
    /**
     * Get all recipe methods.
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        return RecipeMethod::all();
    }

    /**
     * Get the
     *
     * @param $id
     * @return RecipeMethod
     */
    public function getById($id) : RecipeMethod
    {
        return RecipeMethod::findOrFail($id);
    }
}
