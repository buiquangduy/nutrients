<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Question;

class QuestionRepository
{
    /**
     * Find a question by its type.
     *
     * @param string $type
     * @return Question
     */
    public function findByType(string $type): Question
    {
        return Question::type($type)->get()->first();
    }
}
