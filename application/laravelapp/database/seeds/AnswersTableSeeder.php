<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [
                'text' => 'Authはログイン関係で使います。',
                'question_id' => '2',
                'user_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'text' => '目薬さすねん',
                'question_id' => '3',
                'user_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'text' => '頑張ってテーブル繋げるねん',
                'question_id' => '1',
                'user_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'text' => 'リレーション！',
                'question_id' => '1',
                'user_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        foreach ($answers as $answer) {

            DB::table('answers')->insert([
                'text' => $answer['text'],
                'question_id' => $answer['question_id'],
                'user_id' => $answer['user_id'],
            ]);
        }
    }
}
