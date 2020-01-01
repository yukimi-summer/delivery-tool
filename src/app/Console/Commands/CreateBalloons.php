<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateBalloons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createballoons';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default Balloons';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = Carbon::now();

        $data = [
            ['message_id' => 1, 'type' => 1, 'text' => 'おはようございます(love)', 'original_contents_uri' => null, 'preview_contents_uri' => null, 'created_at' => $now, 'updated_at' => $now],
            ['message_id' => 2, 'type' => 1, 'text' => '壁紙のプレゼントです(love)', 'original_contents_uri' => null, 'preview_contents_uri' => null, 'created_at' => $now, 'updated_at' => $now],
            ['message_id' => 2, 'type' => 2, 'text' => null, 'original_contents_uri' => 'https://delivery-tool-storage.s3-ap-northeast-1.amazonaws.com/images/wallpaper1.jpg', 'preview_contents_uri' => 'https://delivery-tool-storage.s3-ap-northeast-1.amazonaws.com/images/wallpaper1.jpg', 'created_at' => $now, 'updated_at' => $now]
        ];

        DB::table('balloons')->insert($data);
    }
}
