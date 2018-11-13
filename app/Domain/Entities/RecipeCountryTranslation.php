<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class RecipeCountryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
