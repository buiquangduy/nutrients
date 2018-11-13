<?php

namespace App\Domain\Services;

use App\Domain\Entities\Expression;
use App\Domain\Repositories\ExpressionRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class ExpressionService.
 *
 * @package App\Domain\Services
 */
class ExpressionService
{
    /**
     * @var ExpressionRepository
     */
    protected $expressionRepository;

    /**
     * ExpressionService constructor.
     *
     * @param ExpressionRepository $expressionRepository
     */
    public function __construct(ExpressionRepository $expressionRepository)
    {
        $this->expressionRepository = $expressionRepository;
    }

    /**
     * Update count_choose expressions when material survey finish
     *
     * @param array $data
     */
    public function update(array $data)
    {
        $dataKey = [];
        foreach ($data as $key => $item) {
            if (is_int($key) && $item) {
                array_push($dataKey, array_keys($item));
            }

        }

        $expressions = $this->expressionRepository->findAll()->toArray();

        foreach ($expressions as $item) {
            $i = 0;
            foreach ($dataKey as $itemKey) {
                if (in_array($item['id'], $itemKey)) {
                    $i++;
                }
            }

            Expression::where('id', $item['id'])
                ->update(['count_choose' => $item['count_choose'] + $i]);
        }
    }

    /**
     * Update count_choose expressions when recipe survey finish
     *
     * @param array $data
     */
    public function updateExpressionWhenRecipeSurvey(array $data)
    {
        array_pop($data);
        $expressions = $this->expressionRepository->findAll()->toArray();

        foreach ($expressions as $item) {
            if (in_array($item['id'], array_keys($data))) {
                Expression::where('id', $item['id'])
                    ->update(['count_choose' => $item['count_choose'] + 1]);
            }
        }
    }
}
