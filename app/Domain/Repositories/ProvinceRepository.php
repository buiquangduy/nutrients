<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Province;
use App\Domain\Entities\ProvinceTranslation;
use Illuminate\Support\Collection;

class ProvinceRepository
{
    /**
     * @param int $countryId
     * @return Collection
     */
    public function findByCountryId(int $countryId): Collection
    {
        return Province::country($countryId)->get();
    }

    /**
     * @param int $countryId
     * @return Collection
     */
    public function findByCountryTranslationId(int $countryId): Collection
    {
        return ProvinceTranslation::countryTranslation($countryId)->get();
    }

    /**
     * @param int $provinceId
     * @return ProvinceRepository
     */
    public function getProvinceById(int $provinceId): ProvinceRepository
    {
        return Province::find($provinceId);
    }

    /**
     * @param int $provinceId
     * @return ProvinceRepository
     */
    public function getProvinceTranslationById(int $provinceId): ProvinceRepository
    {
        return ProvinceTranslation::find($provinceId);
    }
}
