<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             $entries= [
		[
                'page_id' => 'ground-effect',
                'title' => 'Ground Effect',
                'image_path' => 'ground-effect.jpg',
                'blurb' => ' A lowpoly arcade style racing game that capitalizes on the ground effect made in Unity.',
                'description' => 'Arcade style racing game made in Unity Game Engine centered around the ground effect. The player would race against the time, using the physics phenomenon known as the ground effect to get the best time. I wrote the physics and movement scripts in C#, designed levels, made small contributions to 3D models, and helped the team with other scripts and version control.',
                'link' => 'https://github.com/Team-ForLoop/GroundEffectGame',
		],
		[
		                'page_id' => 'laravel-cv',
                'title' => 'Laravel CV',
                'blurb' => 'A portfolio and CV site created in Laravel.',
                'description' => 'The Laravel CV webapp is a portfolio and CV site that is hosted on an AWS EC2 instance. You might have guessed that you are looking at this project right now.',
                'link' => 'https://github.com/nathanelvfawcett/cv-laravel',
            	],
            ];

	foreach($entries as $entry){
    		DB::table('portfolio_entries')->insert($entry);
	}
    }
}
