<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\RecipeCategory;
use Illuminate\Database\Eloquent\Collection;

class RecipeCategoryRepository
{
    /**
     * Get all recipe categories.
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        return RecipeCategory::all();
    }

    /**
     * Get the Recipe category by id
     *
     * @param int $id
     * @return RecipeCategory
     */
    public function getById(int $id) : RecipeCategory
    {
        return RecipeCategory::findOrFail($id);
    }
}
