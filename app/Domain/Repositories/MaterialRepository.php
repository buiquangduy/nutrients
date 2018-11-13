<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Material;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class MaterialRepository.
 *
 * @package App\Domain\Repositories
 */
class MaterialRepository
{
    public function getAll() : Collection
    {
        return Material::all();
    }

    /**
     * Get random materials that have minimum survey answered count.
     *
     * @param int $count
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRandomMaterials(int $count)
    {
        return Material::query()
            ->select('materials.id')
            ->leftJoin('material_survey_sets', 'material_survey_sets.material_id', '=', 'materials.id')
            ->groupBy('materials.id')
            ->orderByRaw('COUNT(material_survey_sets.id), RAND()')
            ->limit($count)
            ->get();
    }
}
