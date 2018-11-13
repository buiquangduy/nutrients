<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Expression;
use Illuminate\Database\Eloquent\Collection;

class ExpressionRepository
{
    /**
     * Get all expressions.
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Expression::all();
    }

    /**
     * Get random expressions.
     *
     * @param int $count
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRandomExpressions(int $count)
    {
        return Expression::query()->orderByRaw('count_choose, RAND()')->limit($count)->get();
    }

    /**
     * Get the expression by id
     *
     * @param $id
     * @return Expression
     */
    public function getById($id) : Expression
    {
        return Expression::findOrFail($id);
    }
}
