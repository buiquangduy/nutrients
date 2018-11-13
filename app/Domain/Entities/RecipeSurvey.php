<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * RecipeSurvey entity.
 *
 * @package App\Domain\Entities
 */
class RecipeSurvey extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['recipe_id', 'weight', 'colors', 'tastes', 'expressions', 'countries', 'methods', 'categories'];

    /**
     * Get the user of the survey
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The recipe surveys that belong to the recipe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
