<?php

namespace App\Http\Controllers;

use App\Domain\Services\MaterialSurveyService;
use Illuminate\Http\Request;

class MaterialSurveyController extends Controller
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
     * @param MaterialSurveyService $materialSurveyService
     * @return array
     */
    public function show(MaterialSurveyService $materialSurveyService): array
    {
        $materialSurvey = $materialSurveyService->buildSurveyQuestions();
        session(['api_material' => $materialSurvey]);

        return ['data' => $materialSurvey];
    }

    public function showMaterialSession()
    {
        return ['data' => session('api_material')];
    }

    public function create(Request $request, MaterialSurveyService $materialSurveyService)
    {
        $user = $request->user();
        $materialSurveyService->create($request->all(), $user);

        return [
            'data' => [
                'recorded_count' => $user->recorded_count,
            ]
        ];
    }
}
