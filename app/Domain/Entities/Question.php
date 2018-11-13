<?php

namespace App\Domain\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Translatable;

    const QUESTION_TASTE = 'taste';

    const QUESTION_WEIGHT = 'weight';

    const QUESTION_EXPRESSION = 'expression';

    const QUESTION_CATEGORY = 'category';

    const QUESTION_COLOR = 'color';

    const QUESTION_METHOD = 'method';

    const QUESTION_COUNTRY = 'country';

    public $translatedAttributes = ['question_1', 'question_2', 'lowest_level_label', 'highest_level_label'];

    protected $hidden = ['created_at', 'updated_at', 'translations', 'type', 'id'];

    protected $with = ['translations'];

    /**
     * Scope for filtering question by types.
     *
     * @param Builder $query
     * @param string $type
     */
    public function scopeType(Builder $query, string $type)
    {
        $query->where('type', $type);
    }
}
