<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\CountryRepository;

class CountryController extends Controller
{
    /**
     * Get list country
     *
     * @param $locale
     * @param CountryRepository $countryRepository
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index($locale, CountryRepository $countryRepository)
    {
        $countries = $countryRepository->findAll();

        if ($locale === 'ja') {
            $countries = $countryRepository->findAllCountryTranslation();
        }

        return $countries;
    }
}
