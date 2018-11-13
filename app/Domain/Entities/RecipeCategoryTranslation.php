<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class RecipeCategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
