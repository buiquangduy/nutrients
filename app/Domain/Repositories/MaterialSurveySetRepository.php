<?php

namespace App\Domain\Repositories;
use App\Domain\Entities\MaterialSurveySet;

class MaterialSurveySetRepository
{
    public function getByDownloadFilter($filter)
    {
        $query = MaterialSurveySet::query();
        if ($filter['countries']) {
            $query = $query->whereIn('material_survey_id', function ($query) use ($filter) {
                $query->select('id')->from('material_surveys')->whereIn('user_id', function ($query) use ($filter) {
                    $query->select('id')->from('users')->whereIn('country_id', $filter['countries']);
                });
            });
        }

        if($filter['materials']) {
            $query = $query->whereIn('material_id', $filter['materials']);
        }

        if ($filter['startDate'] && $filter['endDate']) {
            $query = $query->whereBetween('created_at', [$filter['startDate'], $filter['endDate']]);
        }

        return $query->get();
    }
}
