<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\MaterialSurvey;
use App\Domain\Entities\MaterialSurveySet;
use Illuminate\Support\Facades\DB;

class MaterialSurveyRepository
{
    /**
     * Create new survey.
     *
     * @param MaterialSurvey $materialSurvey
     * @param MaterialSurveySet[] $materialSurveySets
     */
    public function create(MaterialSurvey $materialSurvey, array $materialSurveySets = [])
    {
        DB::beginTransaction();

        $materialSurvey->save();

        foreach ($materialSurveySets as $materialSurveySet) {
            $materialSurvey->sets()->save($materialSurveySet);
        }

        DB::commit();
    }
}
