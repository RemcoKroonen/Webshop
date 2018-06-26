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
            'name' => 'Muis',
            'description' => 'Kies een muis uit',
        ]);
        DB::table('categories')->insert([
             'id' => '2',
            'name' => 'Stoel',
            'description' => 'Kies een stoel uit',
        ]);
        DB::table('categories')->insert([
             'id' => '3',
            'name' => 'toetsenbord',
            'description' => 'Kies een toetsenbord uit',
        ]);
        DB::table('categories')->insert([
             'id' => '4',
            'name' => 'Muispad',
            'description' => 'Kies een muispad uit',
        ]);
        DB::table('categories')->insert([
             'id' => '5',
            'name' => 'Beeldscherm',
            'description' => 'Kies een beeldscherm uit',
        ]);
    }
}
