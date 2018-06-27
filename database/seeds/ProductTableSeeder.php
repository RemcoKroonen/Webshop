<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('articles')->delete();
    	DB::table('articles')->insert([
            'id' => '1',
            'name' => 'Game muis',
            'description' => 'Test muis 1',
            'amount' => '3',
            'discount' => '78',
            'stock' => '100',
            'categorie_id' => '1'
        ]);
        DB::table('articles')->insert([
            'id' => '2',
            'name' => 'Game muis versie twee',
            'description' => 'Test muis 2',
            'amount' => '50.9',
            'discount' => '78',
            'stock' => '100',
            'categorie_id' => '1'
        ]);
        DB::table('articles')->insert([
            'id' => '3',
            'name' => 'Stoel',
            'description' => 'Kies een stoel uit',
            'amount' => '10.5',
            'discount' => '8',
            'stock' => '100',
            'categorie_id' => '2'
        ]);
        DB::table('articles')->insert([
            'id' => '4',
            'name' => 'Stoel versie 2',
            'description' => 'Kies een stoel uit',
            'amount' => '10.9',
            'discount' => '8',
            'stock' => '100',
            'categorie_id' => '2'
        ]);
        DB::table('articles')->insert([
            'id' => '5',
            'name' => 'game toetsenbord',
            'description' => 'Toetsenbord voor gamen',
            'amount' => '9.8',
            'discount' => '7',
            'stock' => '100',
            'categorie_id' => '3'

        ]);
        DB::table('articles')->insert([
            'id' => '6',
            'name' => 'game toetsenbord versie twee',
            'description' => 'Toetsenbord voor gamen',
            'amount' => '10.5',
            'discount' => '7',
            'stock' => '100',
            'categorie_id' => '3'

        ]);
        DB::table('articles')->insert([
            'id' => '7',
            'name' => 'muismat',
            'description' => 'Kwaliteit muismat',
            'amount' => '4.7',
            'discount' => '3',
            'stock' => '100',
            'categorie_id' => '4'
        ]);
        DB::table('articles')->insert([
        	'id' => '8',
            'name' => 'muismat versie twee',
            'description' => 'Kwaliteit muismat',
            'amount' => '4.9',
            'discount' => '3',
            'stock' => '100',
            'categorie_id' => '4'
        ]);
        DB::table('articles')->insert([
            'id' => '9',
            'name' => 'Beeldscherm',
            'description' => 'Dit is beeldscherm 1',
            'amount' => '8.6',
            'discount' => '99',
            'stock' => '100',
            'categorie_id' => '5'
        ]);
        DB::table('articles')->insert([
        	'id' => '10',
            'name' => 'Beeldscherm versie twee',
            'description' => 'Dit is beeldscherm',
            'amount' => '89.5',
            'discount' => '50',
            'stock' => '1',
            'categorie_id' => '5'
        ]);
    }

}
