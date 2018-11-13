<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\ProvinceRepository;

class ProvinceController extends Controller
{
    /**
     * Get list province by country id
     *
     * @param ProvinceRepository $provinceRepository
     * @param $countryId
     * @param $locale
     * @return \Illuminate\Support\Collection
     */
    public function index(ProvinceRepository $provinceRepository, $countryId, $locale)
    {
        $provinces = $provinceRepository->findByCountryTranslationId($countryId);

        if ($locale !== 'ja' || $provinces->count() === 0) {
            $provinces = $provinceRepository->findByCountryId($countryId);
        }

        return $provinces;
    }
}
