<?php

use Database\Seeders\RolesTableSeeder;
use Database\Seeders\ForumuserOpinionTableSeeder;
use Database\Seeders\ForumusersTableSeeder;    
use Database\Seeders\OpinionReferenceTableSeeder;
use Database\Seeders\OpinionsTableSeeder;      
use Database\Seeders\OpinionstatesTableSeeder; 
use Database\Seeders\OpinionstatetransitionsTableSeeder;
use Database\Seeders\ReferencesTableSeeder;
use Database\Seeders\StatesTableSeeder;        
use Database\Seeders\ThemesTableSeeder;        
use Database\Seeders\TopicsTableSeeder;  
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            ForumusersTableSeeder::class,
            StatesTableSeeder::class,
            ThemesTableSeeder::class,
            OpinionstatesTableSeeder::class,
            ReferencesTableSeeder::class,
            TopicsTableSeeder::class,
            OpinionsTableSeeder::class,
            ForumuserOpinionTableSeeder::class,
            OpinionReferenceTableSeeder::class,
            OpinionstatetransitionsTableSeeder::class,
        ]);
    }
}
