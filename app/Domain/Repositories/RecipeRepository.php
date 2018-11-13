<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Recipe;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class RecipeRepository.
 *
 * @package App\Domain\Repositories
 */
class RecipeRepository
{
    public function getAll() : Collection
    {
        return Recipe::all();
    }

    /**
     * Get random recipes that have minimum survey answered count.
     *
     * @return Recipe
     */
    public function getRandomRecipe()
    {
        return Recipe::query()
            ->select('recipes.id')
            ->leftJoin('recipe_surveys', 'recipe_surveys.recipe_id', '=', 'recipes.id')
            ->groupBy('recipes.id')
            ->orderByRaw('COUNT(recipe_surveys.id), RAND()')
            ->limit(1)
            ->get()
            ->first();
    }
}
