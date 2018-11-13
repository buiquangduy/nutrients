<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class ExpressionTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
