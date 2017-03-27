<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10 ; $i++) { 
            # code...
                DB::table('contents')->insert(
            [
                'title' => '你们就想搞个大新闻',
                'content' => '我只不过是想搞的大新闻',
                'category_id' => 1,
                'author_id' =>1,
            ]);
        }
        
    }
}
