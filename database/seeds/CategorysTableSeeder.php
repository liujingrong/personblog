<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i = 0;$i < 10; $i++)
        {
            DB::table('categorys')->insert(
                ['cate_name' => "PHP",
                'display' => 1,
                ]
                );

        }
    }
}
