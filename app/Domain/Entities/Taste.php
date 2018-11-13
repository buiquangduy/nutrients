<?php

namespace App\Domain\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Taste extends Model
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $hidden = ['created_at', 'updated_at', 'translations'];

    protected $with = ['translations'];
}
