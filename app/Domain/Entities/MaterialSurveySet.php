<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * MaterialSurveySet entity.
 *
 * @package App\Domain\Entities
 */
class MaterialSurveySet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['material_id', 'weight', 'colors', 'tastes', 'expressions'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'material_survey_id' => 'integer',
        'material_id' => 'integer',
        'weight' => 'integer',
        'colors' => 'array',
        'tastes' => 'array',
        'expressions' => 'array',
    ];

    /**
     * Survey relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo(MaterialSurvey::class, 'material_survey_id');
    }

    /**
     * The Material Survey sets that belong to the material
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
