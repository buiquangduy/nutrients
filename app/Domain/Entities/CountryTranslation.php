<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries_translations';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
