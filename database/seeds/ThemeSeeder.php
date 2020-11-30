<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                'name' => 'React native'
            ],
            [
                'name' => 'Java'
            ],
            [
                'name' => 'API'
            ],
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'Angular'
            ],
            [
                'name' => 'React'
            ]
        ];
        foreach($themes as $theme) Theme::create($theme);
    }
}
