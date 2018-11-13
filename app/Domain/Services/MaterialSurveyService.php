<?php

namespace App\Domain\Services;

use App\Domain\Entities\Material;
use App\Domain\Entities\MaterialSurvey;
use App\Domain\Entities\MaterialSurveySet;
use App\Domain\Entities\Question;
use App\Domain\Entities\User;
use App\Domain\Repositories\MaterialRepository;
use App\Domain\Repositories\MaterialSurveyRepository;
use App\Domain\Repositories\QuestionRepository;
use App\Domain\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class MaterialSurveyService.
 *
 * @package App\Domain\Services
 */
class MaterialSurveyService
{
    /**
     * @var MaterialSurveyRepository
     */
    protected $materialSurveyRepository;

    /**
     * @var MaterialRepository
     */
    protected $materialRepository;

    /**
     * @var QuestionRepository
     */
    protected $questionRepository;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @var QuestionBuilderService
     */
    protected $questionBuilderService;

    /**
     * MaterialSurveyService constructor.
     *
     * @param MaterialSurveyRepository $materialSurveyRepository
     * @param MaterialRepository $materialRepository
     * @param QuestionRepository $questionRepository
     * @param UserRepository $userRepository
     * @param QuestionBuilderService $questionBuilderService
     */
    public function __construct(
        MaterialSurveyRepository $materialSurveyRepository,
        MaterialRepository $materialRepository,
        QuestionRepository $questionRepository,
        UserRepository $userRepository,
        QuestionBuilderService $questionBuilderService)
    {
        $this->materialSurveyRepository = $materialSurveyRepository;
        $this->materialRepository = $materialRepository;
        $this->questionRepository = $questionRepository;
        $this->userRepository = $userRepository;
        $this->questionBuilderService = $questionBuilderService;
    }

    /**
     * Build survey questions to display.
     *
     * @return \Illuminate\Support\Collection
     */
    public function buildSurveyQuestions()
    {
        $materials = $this->materialRepository->getRandomMaterials(2);

        return $materials->map(function(Material $material) {
            return [
                'material' => $material,
                'questions' => [
                    Question::QUESTION_TASTE => $this->questionBuilderService->getTasteQuestionData(),
                    Question::QUESTION_WEIGHT => $this->questionBuilderService->getWeightQuestionData(),
                    Question::QUESTION_EXPRESSION => $this->questionBuilderService->getExpressionQuestionData(),
                    Question::QUESTION_COLOR => $this->questionBuilderService->getColorQuestionData(),
                ]
            ];
        });
    }

    /**
     * Create a new material survey result.
     *
     * @param array $data
     * @param User $user
     * @return MaterialSurvey
     */
    public function create(array $data, User $user): MaterialSurvey
    {
        DB::beginTransaction();

        // create new material survey
        $materialSurvey = new MaterialSurvey();
        $materialSurvey['user_id'] = $user->id;
        $materialSurveySets = [];

        foreach ($data['sets'] as $setData) {
            $materialSurveySets[] = new MaterialSurveySet($setData);
        }

        $this->materialSurveyRepository->create($materialSurvey, $materialSurveySets);

        // update user recorded_count
        $this->userRepository->increaseRecordedCount($user, 2);
        $user->refresh();

        DB::commit();

        return $materialSurvey;
    }
}
