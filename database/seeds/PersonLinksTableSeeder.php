<?php

use Illuminate\Database\Seeder;

class PersonLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i < 10; $i++)
        {
            DB::table('person_links')->insert(
                [
                    'link_name' => 'Github',
                    'url' => 'https://github.com/sssyy',
                    'url2' => 'https://github.com/yuejianbin'
                ]
                );
        }
    }
}
