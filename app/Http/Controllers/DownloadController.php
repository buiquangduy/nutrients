<?php

namespace App\Http\Controllers;

use App\Domain\Entities\MaterialSurveySet;
use App\Domain\Services\DownloadService;
use Illuminate\Http\Request;
use App\Domain\Repositories\CountryRepository;
use App\Domain\Repositories\MaterialRepository;
use App\Domain\Repositories\RecipeRepository;
use Illuminate\View\View;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DownloadController extends Controller
{
    public function showDownloadForm(
        CountryRepository $countryRepository,
        MaterialRepository $materialRepository,
        RecipeRepository $recipeRepository
    ) : View
    {
        $data = [
            'countries' => $countryRepository->findAll(),
            'materials' => $materialRepository->getAll(),
            'recipes' => $recipeRepository->getAll(),
        ];

        return view('download.index', $data);
    }

    public function download(Request $request, DownloadService $downloadService)
    {
        $filter = [
            'countries' => $request->countries,
            'survey' => $request->survey,
            'materials' => $request->materials,
            'recipes' => $request->recipes,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'user' => $request->user,
        ];

        $writer = $downloadService->generateFile($filter);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="surveys.xlsx"');
        $writer->save('php://output');
    }
}
