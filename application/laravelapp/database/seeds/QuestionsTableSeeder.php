<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'genre_id' => '1',
                'text' => 'genre_idからgenre_nameが引っ張ってこれない？',
                'status' => '1',
                'answer_id' => '1',
                'user_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'genre_id' => '2',
                'text' => 'リレーションが繋げられない',
                'status' => '2',
                'answer_id' => '2',
                'user_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'genre_id' => '5',
                'text' => '12時間も画面見てたら頭おかしなる',
                'status' => '2',
                'answer_id' => '2',
                'user_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($questions as $question) {

            DB::table('questions')->insert([
                'genre_id' => $question['genre_id'],
                'text' => $question['text'],
                'status' => $question['status'],
                'answer_id' => $question['answer_id'],
                'user_id' => $question['user_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
