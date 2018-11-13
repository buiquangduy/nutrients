<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class RecipeTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
