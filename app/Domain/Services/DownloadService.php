<?php

namespace App\Domain\Services;

use App\Domain\Repositories\MaterialSurveySetRepository;
use App\Domain\Repositories\RecipeCategoryRepository;
use App\Domain\Repositories\RecipeCountryRepository;
use App\Domain\Repositories\RecipeMethodRepository;
use App\Domain\Repositories\TasteRepository;
use App\Domain\Repositories\ExpressionRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Style;
use App\Domain\Repositories\RecipeSurveyRepository;

class DownloadService
{
    private function generateTastesText($tastes)
    {
        $tasteRepository = new TasteRepository();
        $result = '';

        foreach($tastes as $tasteId => $tasteValue) {
            $result .= $tasteRepository->getById($tasteId)->name . ': ' . $tasteValue . ', ';
        }

        return $result;
    }

    private function generateExpressionsText($expressions)
    {
        if(!$expressions) {
            return 'skip';
        }

        $expressionsRepository = new ExpressionRepository();
        $result = '';

        foreach($expressions as $expressionId => $expressionValue) {
            $result .= $expressionsRepository->getById($expressionId)->name . ': ' . $expressionValue . ', ';
        }

        return $result;
    }

    private function generateColorsText($colors)
    {
        if(!$colors) {
            return 'skip';
        }

        return implode(', ', $colors);
    }

    private function generateCategoriesText($categories)
    {
        if(!$categories) {
            return 'skip';
        }

        $recipeCategoryRepository = new RecipeCategoryRepository();

        $result = '';

        foreach($categories as $categoryId => $categoryValue) {
            $result .= $recipeCategoryRepository->getById($categoryId)->name . ': ' . $categoryValue . ', ';
        }

        return $result;
    }

    private function generateCountriesText($countries)
    {
        if(!$countries) {
            return 'skip';
        }

        $recipeCountryRepository = new RecipeCountryRepository();

        $result = '';

        foreach($countries as $countryId => $countryValue) {
            if($countryValue) {
                $result .= $recipeCountryRepository->getById($countryId)->name . ', ';
            }
        }

        return $result;
    }

    private function generateMethodsText($methods)
    {
        if(!$methods) {
            return 'skip';
        }

        $recipeMethodRepository = new RecipeMethodRepository();

        $result = '';

        foreach($methods as $methodId => $methodValue) {
            if($methodValue) {
                $result .= $recipeMethodRepository->getById($methodId)->name . ', ';
            }
        }

        return $result;
    }

    public function generateFile($filter)
    {
        $materialSurveySetRepository = new MaterialSurveySetRepository();
        $recipeSurveysRepository = new RecipeSurveyRepository();
        $spreadsheet = new Spreadsheet();

        $materialSurveys = $materialSurveySetRepository->getByDownloadFilter($filter);
        $recipeSurveys = $recipeSurveysRepository->getByDownloadFilter($filter);

        $sheetIndex = 0;

        if($filter['survey'] == 'all' OR $filter['survey'] == 'material') {
            $spreadsheet->setActiveSheetIndex($sheetIndex)
                ->setCellValue('A1', 'ID')
                ->setCellValue('B1', '名前')
                ->setCellValue('C1', '味')
                ->setCellValue('D1', '重量')
                ->setCellValue('E1', '食感やイメージ')
                ->setCellValue('F1', '色合い')
                ->setCellValue('G1', 'ユーザー名')
                ->setCellValue('H1', 'お誕生日')
                ->setCellValue('I1', '性別')
                ->setCellValue('J1', '出身国')
                ->setCellValue('K1', '時間');

            $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(30);
            $spreadsheet->getActiveSheet()->getStyle('A1:K1')->getFill()
                ->setFillType(Style::class)
                ->getStartColor()
                ->setRGB('CCC');

            $index = 2;
            foreach ($materialSurveys as $material) {
                $spreadsheet->getActiveSheet()->setCellValue('A' . $index, $material->id);
                $spreadsheet->getActiveSheet()->setCellValue('B' . $index, $material->material['name']);
                $spreadsheet->getActiveSheet()->setCellValue('C' . $index, $this->generateTastesText($material->tastes));
                $spreadsheet->getActiveSheet()->setCellValue('D' . $index, $material->weight);
                $spreadsheet->getActiveSheet()->setCellValue('E' . $index, $this->generateExpressionsText($material->expressions));
                $spreadsheet->getActiveSheet()->setCellValue('F' . $index, $this->generateColorsText($material->colors));
                $spreadsheet->getActiveSheet()->setCellValue('G' . $index, $material->survey->user['name']);
                $spreadsheet->getActiveSheet()->setCellValue('H' . $index, $material->survey->user['dob']);
                $spreadsheet->getActiveSheet()->setCellValue('I' . $index, $material->survey->user['sex']);
                $spreadsheet->getActiveSheet()->setCellValue('J' . $index, $material->survey->user->country['name']);
                $spreadsheet->getActiveSheet()->setCellValue('K' . $index, $material->created_at);
                $index++;
            }

            if(!$filter['user']['name']) {
                $spreadsheet->getActiveSheet()->removeColumn('G');
            }
            if(!$filter['user']['age']) {
                $spreadsheet->getActiveSheet()->removeColumn('H');
            }
            if(!$filter['user']['gender']) {
                $spreadsheet->getActiveSheet()->removeColumn('I');
            }
            if(!$filter['user']['nation']) {
                $spreadsheet->getActiveSheet()->removeColumn('J');
            }

            $spreadsheet->getActiveSheet()->setTitle('Materials');
            $sheetIndex++;
        }
        if($filter['survey'] == 'all' OR $filter['survey'] == 'recipe') {
            if($filter['survey'] == 'all') {
                $spreadsheet->createSheet();
            }

            $spreadsheet->setActiveSheetIndex($sheetIndex)
                ->setCellValue('A1', 'ID')
                ->setCellValue('B1', '名前')
                ->setCellValue('C1', '味')
                ->setCellValue('D1', '重量')
                ->setCellValue('E1', '表現')
                ->setCellValue('F1', 'カテゴリ')
                ->setCellValue('G1', '調理方法')
                ->setCellValue('H1', '色合い')
                ->setCellValue('I1', '国籍')
                ->setCellValue('J1', 'ユーザー名')
                ->setCellValue('K1', 'お誕生日')
                ->setCellValue('L1', '性別')
                ->setCellValue('M1', '出身国')
                ->setCellValue('N1', '時間');

            $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(30);
            $spreadsheet->getActiveSheet()->getStyle('A1:L1')->getFill()
                ->setFillType(Style::class)
                ->getStartColor()
                ->setRGB('CCC');

            $index = 2;
            foreach ($recipeSurveys as $recipeSurvey) {
                $spreadsheet->getActiveSheet()->setCellValue('A' . $index, $recipeSurvey->id);
                $spreadsheet->getActiveSheet()->setCellValue('B' . $index, $recipeSurvey->recipe['name']);
                $spreadsheet->getActiveSheet()->setCellValue('C' . $index, $this->generateTastesText(json_decode($recipeSurvey->tastes, true)));
                $spreadsheet->getActiveSheet()->setCellValue('D' . $index, $recipeSurvey->weight);
                $spreadsheet->getActiveSheet()->setCellValue('E' . $index, $this->generateExpressionsText(json_decode($recipeSurvey->expressions, true)));
                $spreadsheet->getActiveSheet()->setCellValue('F' . $index, $this->generateCategoriesText(json_decode($recipeSurvey->categories, true)));
                $spreadsheet->getActiveSheet()->setCellValue('G' . $index, $this->generateMethodsText(json_decode($recipeSurvey->methods)));
                $spreadsheet->getActiveSheet()->setCellValue('H' . $index, $this->generateColorsText(json_decode($recipeSurvey->colors, 'true')));
                $spreadsheet->getActiveSheet()->setCellValue('I' . $index, $this->generateCountriesText(json_decode($recipeSurvey->countries, 'true')));
                $spreadsheet->getActiveSheet()->setCellValue('J' . $index, $recipeSurvey->user['name']);
                $spreadsheet->getActiveSheet()->setCellValue('K' . $index, $recipeSurvey->user['dob']);
                $spreadsheet->getActiveSheet()->setCellValue('L' . $index, $recipeSurvey->user['sex']);
                $spreadsheet->getActiveSheet()->setCellValue('M' . $index, $recipeSurvey->user->country['name']);
                $spreadsheet->getActiveSheet()->setCellValue('N' . $index, $recipeSurvey->created_at);
                $index++;
            }
            if(!$filter['user']['name']) {
                $spreadsheet->getActiveSheet()->removeColumn('J');
            }
            if(!$filter['user']['age']) {
                $spreadsheet->getActiveSheet()->removeColumn('K');
            }
            if(!$filter['user']['gender']) {
                $spreadsheet->getActiveSheet()->removeColumn('L');
            }
            if(!$filter['user']['nation']) {
                $spreadsheet->getActiveSheet()->removeColumn('M');
            }

            $spreadsheet->getActiveSheet()->setTitle('Recipes');
        }
        $spreadsheet->setActiveSheetIndex(0);

        return new Xlsx($spreadsheet);
    }
}