<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++)
        {
            DB::table('authors')->insert(
                [
                    'name' => '岳池',
                    'head_image_url' => './public/images/1.jpg',
                    'person_belief' => '你是最好的',

                ]
                );
        }
    }
}
