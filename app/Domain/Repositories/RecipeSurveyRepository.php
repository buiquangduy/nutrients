<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\RecipeSurvey;
use Illuminate\Support\Facades\DB;

class RecipeSurveyRepository
{
    /**
     * Create new survey.
     *
     * @param RecipeSurvey $recipeSurvey
     */
    public function create(RecipeSurvey $recipeSurvey)
    {
        DB::beginTransaction();

        $recipeSurvey->save();

        DB::commit();
    }

    /**
     *
     *
     * @param $filter
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByDownloadFilter($filter)
    {
        $query = RecipeSurvey::query();
        if ($filter['countries']) {
            $query = $query->whereIn('user_id', function ($query) use ($filter) {
                $query->select('id')->from('users')->whereIn('country_id', $filter['countries']);
            });
        }

        if ($filter['startDate'] && $filter['endDate']) {
            $query = $query->whereBetween('created_at', [$filter['startDate'], $filter['endDate']]);
        }

        return $query->get();
    }
}
