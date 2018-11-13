<?php

namespace App\Domain\Services;

use App\Domain\Entities\Recipe;
use App\Domain\Entities\Question;
use App\Domain\Entities\RecipeSurvey;
use App\Domain\Entities\User;
use App\Domain\Repositories\RecipeRepository;
use App\Domain\Repositories\RecipeSurveyRepository;
use App\Domain\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class RecipeSurveyService.
 *
 * @package App\Domain\Services
 */
class RecipeSurveyService
{
    /**
     * @var RecipeSurveyRepository
     */
    protected $recipeSurveyRepository;

    /**
     * @var RecipeRepository
     */
    protected $recipeRepository;

    /**
     * @var QuestionBuilderService
     */
    protected $questionBuilderService;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * MaterialSurveyService constructor.
     *
     * @param RecipeSurveyRepository $recipeSurveyRepository
     * @param RecipeRepository $recipeRepository
     * @param QuestionBuilderService $questionBuilderService
     * @param UserRepository $userRepository
     */
    public function __construct(
        RecipeSurveyRepository $recipeSurveyRepository,
        RecipeRepository $recipeRepository,
        QuestionBuilderService $questionBuilderService,
        UserRepository $userRepository)
    {
        $this->recipeSurveyRepository = $recipeSurveyRepository;
        $this->recipeRepository = $recipeRepository;
        $this->questionBuilderService = $questionBuilderService;
        $this->userRepository = $userRepository;
    }

    /**
     * Build survey questions to display.
     *
     * @return array
     */
    public function buildSurveyQuestions()
    {
        $recipe = $this->recipeRepository->getRandomRecipe();

        return [
            'recipe' => $recipe,
            'questions' => [
                Question::QUESTION_TASTE => $this->questionBuilderService->getTasteQuestionData(),
                Question::QUESTION_WEIGHT => $this->questionBuilderService->getWeightQuestionData(),
                Question::QUESTION_EXPRESSION => $this->questionBuilderService->getExpressionQuestionData(),
                Question::QUESTION_COLOR => $this->questionBuilderService->getColorQuestionData(),
                Question::QUESTION_CATEGORY => $this->questionBuilderService->getCategoryQuestionData(),
                Question::QUESTION_METHOD => $this->questionBuilderService->getMethodQuestionData(),
                Question::QUESTION_COUNTRY => $this->questionBuilderService->getCountryQuestionData(),
            ]
        ];
    }

    /**
     * Create a new recipe survey result.
     *
     * @param array $data
     * @param User $user
     * @return RecipeSurvey
     */
    public function create(array $data, User $user): RecipeSurvey
    {
        DB::beginTransaction();

        // create new recipe survey
        $recipeSurvey = new RecipeSurvey($data);
        $recipeSurvey['user_id'] = $user->id;

        $this->recipeSurveyRepository->create($recipeSurvey);

        // update user recorded_count
        $this->userRepository->increaseRecordedCount($user);
        $user->refresh();

        DB::commit();

        return $recipeSurvey;
    }
}