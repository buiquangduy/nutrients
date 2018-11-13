<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * MaterialSurvey entity.
 *
 * @package App\Domain\Entities
 */
class MaterialSurvey extends Model
{
    /**
     * Sets relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sets()
    {
        return $this->hasMany(MaterialSurveySet::class);
    }

    /**
     * Get the user that owns the survey
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
