<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Domain\Entities\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();
        DB::table('question_translations')->truncate();

        DB::table('questions')->insert([
            [
                'type' => Question::QUESTION_TASTE,
                'lowest_level' => 0,
                'highest_level' => 4,
                'is_required' => true,
            ],
            [
                'type' => Question::QUESTION_WEIGHT,
                'lowest_level' => 0,
                'highest_level' => 4,
                'is_required' => false,
            ],
            [
                'type' => Question::QUESTION_EXPRESSION,
                'lowest_level' => 0,
                'highest_level' => 1,
                'is_required' => false,
            ],
            [
                'type' => Question::QUESTION_CATEGORY,
                'lowest_level' => 0,
                'highest_level' => 1,
                'is_required' => false,
            ],
            [
                'type' => Question::QUESTION_COLOR,
                'lowest_level' => 0,
                'highest_level' => 0,
                'is_required' => false,
            ],
            [
                'type' => Question::QUESTION_METHOD,
                'lowest_level' => 0,
                'highest_level' => 0,
                'is_required' => false,
            ],
            [
                'type' => Question::QUESTION_COUNTRY,
                'lowest_level' => 0,
                'highest_level' => 0,
                'is_required' => false,
            ],
        ]);

        DB::table('question_translations')->insert([
            [
                'question_id' => 1,
                'question_1' => 'Question about taste',
                'question_2' => 'Choose the best answer',
                'lowest_level_label' => 'None',
                'highest_level_label' => 'Max',
                'locale' => 'en',
            ],
            [
                'question_id' => 1,
                'question_1' => '”味”について教えてください',
                'question_2' => 'それぞれに最適だと思うものを1つだけ選択してください。',
                'lowest_level_label' => '無し',
                'highest_level_label' => '強',
                'locale' => 'ja',
            ],
            [
                'question_id' => 2,
                'question_1' => 'Question about weight',
                'question_2' => 'Choose the best answer',
                'lowest_level_label' => 'None',
                'highest_level_label' => 'Max',
                'locale' => 'en',
            ],
            [
                'question_id' => 2,
                'question_1' => '"雰囲気の重量"について教えてください',
                'question_2' => '最適だと思うものを1つだけ選択して下さい。',
                'lowest_level_label' => '軽い',
                'highest_level_label' => '重たい',
                'locale' => 'ja',
            ],
            [
                'question_id' => 3,
                'question_1' => 'Question about expression',
                'question_2' => 'Choose the best answer',
                'lowest_level_label' => 'No',
                'highest_level_label' => 'Yes',
                'locale' => 'en',
            ],
            [
                'question_id' => 3,
                'question_1' => '"食感やイメージ"について教えてください',
                'question_2' => '下記の表現は正しいと思いますか。?',
                'lowest_level_label' => '正しい',
                'highest_level_label' => '間違い',
                'locale' => 'ja',
            ],
            [
                'question_id' => 4,
                'question_1' => 'Question about category',
                'question_2' => 'Choose the best answer',
                'lowest_level_label' => 'No',
                'highest_level_label' => 'Yes',
                'locale' => 'en',
            ],
            [
                'question_id' => 4,
                'question_1' => '”カテゴリ”について教えてください',
                'question_2' => 'それぞれの毛手ごりに適しているか選択して下さい。',
                'lowest_level_label' => '適している',
                'highest_level_label' => '適していない',
                'locale' => 'ja',
            ],
            [
                'question_id' => 5,
                'question_1' => 'Question about "color"',
                'question_2' => 'Select all the colors that describe your opinion.',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'en',
            ],
            [
                'question_id' => 5,
                'question_1' => '"色合い"について教えてください',
                'question_2' => '最適と思う色合いを選択して下さい。',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'ja',
            ],
            [
                'question_id' => 6,
                'question_1' => 'Question about method',
                'question_2' => 'Choose the right answer',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'en',
            ],
            [
                'question_id' => 6,
                'question_1' => '"調理方法"について教えてください',
                'question_2' => '使用していると考えられる調理方法を自由に選択して',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'ja',
            ],
            [
                'question_id' => 7,
                'question_1' => 'Question about country',
                'question_2' => 'Choose the right answer',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'en',
            ],
            [
                'question_id' => 7,
                'question_1' => '"国籍"について教えてください',
                'question_2' => '該当すると思うものを自由に選択してください。',
                'lowest_level_label' => '',
                'highest_level_label' => '',
                'locale' => 'ja',
            ],
        ]);
    }
}
