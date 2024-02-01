<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                "title" => "Grafica",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            ],
            [
                "title" => "Sviluppo web",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            ],
            [
                "title" => "Design",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();

        }
        
        // for($i=0; $i<sizeof($portfolios); $i++){
        //     $new_portfolio = new Portfolio();
        //     $new_portfolio->title = $portfolios[$i]["title"];
        //     $new_portfolio->description = $portfolios[$i]["description"];
        //     $new_portfolio->thumb = $portfolios[$i]["thumb"];
        //     $new_portfolio->save();
        // }
    }
}
