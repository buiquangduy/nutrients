<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Country;
use App\Domain\Entities\CountryTranslation;
use Illuminate\Database\Eloquent\Collection;

class CountryRepository
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Country::all();
    }

    /**
     * @return Collection
     */
    public function findAllCountryTranslation(): Collection
    {
        return CountryTranslation::all();
    }

    /**
     * Find a country by id
     *
     * @param int $countryId
     * @return Country
     */
    public function getCountryById(int $countryId): Country
    {
        return Country::find($countryId);
    }

    /**
     * Find a country translation by id
     *
     * @param int $countryId
     * @return Country
     */
    public function getCountryTranslationById(int $countryId): Country
    {
        return CountryTranslation::find($countryId);
    }
}
