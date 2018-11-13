<?php

namespace App\Http\Controllers;

use App\Domain\Services\RecipeSurveyService;
use Illuminate\Http\Request;

class RecipeSurveyController extends Controller
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
     * Get a survey data to display.
     *
     * @param RecipeSurveyService $recipeSurveyService
     * @return array
     */
    public function show(RecipeSurveyService $recipeSurveyService): array
    {
        $recipeSurvey = $recipeSurveyService->buildSurveyQuestions();
        session(['recipe_survey' => $recipeSurvey]);

        return ['data' => $recipeSurvey];
    }

    public function showRecipeSession()
    {
        return ['data' => session('recipe_survey')];
    }

    public function create(Request $request, RecipeSurveyService $recipeSurveyService)
    {
        $user = $request->user();
        $recipeSurveyService->create($request->all(), $user);

        return [
            'data' => [
                'recorded_count' => $user->recorded_count,
            ]
        ];
    }
}
