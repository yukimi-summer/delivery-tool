<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('messages')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $messages = [
              ['title' => '朝のメッセージ'],
              ['title' => '壁紙プレゼント']
             ];

        // 登録
        foreach ($messages as $message) {
            \App\Messages::create($message);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
