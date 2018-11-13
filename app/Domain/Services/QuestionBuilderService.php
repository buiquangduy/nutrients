<?php

namespace App\Domain\Services;

use App\Domain\Entities\Question;
use App\Domain\Repositories\QuestionRepository;
use App\Domain\Repositories\TasteRepository;
use App\Domain\Repositories\ExpressionRepository;
use App\Domain\Repositories\RecipeCategoryRepository;
use App\Domain\Repositories\RecipeMethodRepository;
use App\Domain\Repositories\RecipeCountryRepository;

class QuestionBuilderService
{
    /**
     * @var QuestionRepository
     */
    protected $questionRepository;

    /**
     * @var TasteRepository
     */
    protected $tasteRepository;

    /**
     * @var ExpressionRepository
     */
    protected $expressionRepository;

    /**
     * @var RecipeCategoryRepository
     */
    protected $recipeCategoryRepository;

    /**
     * @var RecipeMethodRepository
     */
    protected $recipeMethodRepository;

    /**
     * @var RecipeCountryRepository
     */
    protected $recipeCountryRepository;

    /**
     * CommonService constructor.
     *
     * @param QuestionRepository $questionRepository
     * @param TasteRepository $tasteRepository
     * @param ExpressionRepository $expressionRepository
     * @param RecipeCategoryRepository $recipeCategoryRepository
     * @param RecipeMethodRepository $recipeMethodRepository
     * @param RecipeCountryRepository $recipeCountryRepository
     */
    public function __construct(
        QuestionRepository $questionRepository,
        TasteRepository $tasteRepository,
        ExpressionRepository $expressionRepository,
        RecipeCategoryRepository $recipeCategoryRepository,
        RecipeMethodRepository $recipeMethodRepository,
        RecipeCountryRepository $recipeCountryRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->tasteRepository = $tasteRepository;
        $this->expressionRepository = $expressionRepository;
        $this->recipeCategoryRepository = $recipeCategoryRepository;
        $this->recipeMethodRepository = $recipeMethodRepository;
        $this->recipeCountryRepository = $recipeCountryRepository;
    }

    /**
     * Build and return data for a taste question.
     *
     * @return array
     */
    public function getTasteQuestionData(): array
    {
        return [
                'options' => $this->tasteRepository->findAll(),
                'general' => $this->questionRepository->findByType(Question::QUESTION_TASTE)
            ];
    }

    /**
     * Build and return data for a weight question.
     *
     * @return array
     */
    public function getWeightQuestionData(): array
    {
        return ['general' => $this->questionRepository->findByType(Question::QUESTION_WEIGHT)];
    }

    /**
     * Build and return data for a expression question.
     *
     * @return array
     */

    public function getExpressionQuestionData(): array
    {
        return [
                'options' => $this->expressionRepository->getRandomExpressions(4),
                'general' => $this->questionRepository->findByType(Question::QUESTION_EXPRESSION)
            ];
    }

    /**
     * Build and return data for a category question.
     *
     * @return array
     */

    public function getCategoryQuestionData(): array
    {
        return [
                'options' => $this->recipeCategoryRepository->findAll(),
                'general' => $this->questionRepository->findByType(Question::QUESTION_CATEGORY),
            ];
    }

    /**
     * Build and return data for a color question.
     *
     * @return array
     */

    public function getColorQuestionData(): array
    {
        return ['general' =>$this->questionRepository->findByType(Question::QUESTION_COLOR)];
    }

    /**
     * Build and return data for a method question.
     *
     * @return array
     */

    public function getMethodQuestionData(): array
    {
        return [
                'options' => $this->recipeMethodRepository->findAll(),
                'general' => $this->questionRepository->findByType(Question::QUESTION_METHOD)
            ];
    }

    /**
     * Build and return data for a country question.
     *
     * @return array
     */

    public function getCountryQuestionData(): array
    {
        return [
                'options' => $this->recipeCountryRepository->findAll(),
                'general' => $this->questionRepository->findByType(Question::QUESTION_COUNTRY)
            ];
    }
}
