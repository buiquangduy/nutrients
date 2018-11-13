<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProvinceTranslation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provinces_translations';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Scope for get province by country id.
     *
     * @param Builder $query
     * @param int $countryId
     */
    public function scopeCountryTranslation(Builder $query, int $countryId)
    {
        $query->where('country_id', $countryId);
    }
}
