<?php

use Illuminate\Database\Seeder;

class CatergorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Muizen',
            'description' => 'Kies een muis uit',
        ]);
        DB::table('categories')->insert([
             'id' => '2',
            'name' => 'Stoelen',
            'description' => 'Kies een stoel uit',
        ]);
        DB::table('categories')->insert([
             'id' => '3',
            'name' => 'toetsenborden',
            'description' => 'Kies een toetsenbord uit',
        ]);
        DB::table('categories')->insert([
             'id' => '4',
            'name' => 'muismatten',
            'description' => 'Kies een muispad uit',
        ]);
        DB::table('categories')->insert([
             'id' => '5',
            'name' => 'Beeldschermen',
            'description' => 'Kies een beeldscherm uit',
        ]);
    }
}
