<?php

namespace App\Http\Controllers;

use App\Domain\Services\ExpressionService;
use Illuminate\Http\Request;

class ExpressionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update count_choose expressions when material survey finish
     *
     * @param Request $request
     * @param ExpressionService $expressionService
     */
    public function update(Request $request, ExpressionService $expressionService)
    {
        $expressionService->update($request->all());
    }

    /**
     * Update count_choose expressions when recipe survey finish
     *
     * @param Request $request
     * @param ExpressionService $expressionService
     */
    public function updateExpressionWhenRecipeSurvey(Request $request, ExpressionService $expressionService)
    {
        $expressionService->updateExpressionWhenRecipeSurvey($request->all());
    }
}
