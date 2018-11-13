<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\RecipeCountry;
use Illuminate\Database\Eloquent\Collection;

class RecipeCountryRepository
{
    /**
     * Get all recipe countries.
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        return RecipeCountry::all();
    }

    /**
     * Get the Recipe country by id
     *
     * @param $id
     * @return RecipeCountry
     */
    public function getById($id) : RecipeCountry
    {
        return RecipeCountry::findOrFail($id);
    }
}
