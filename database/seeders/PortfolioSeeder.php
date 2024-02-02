<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                "title" => "Portfolio di Marco",
                "description" => "Porfolio magnifico di Marco",
                "thumb" => "https://s.tmimgcdn.com/scr/1200x750/339200/portfolio-di-architettura-portfolio-design-modello-portfolio-interni_339244-original.jpg",
                "type_id" => 2
            ],
            [
                "title" => "Portfolio di Fabrizio",
                "description" => "Porfolio magnifico di Fabrizio",
                "thumb" => "https://s.tmimgcdn.com/scr/1200x750/339200/portfolio-di-architettura-portfolio-design-modello-portfolio-interni_339244-original.jpg",
                "type_id" => 3

            ]
        ];

        foreach ($portfolios as $portfolio) {
            $newPortfolio = new Portfolio();
            $newPortfolio->fill($portfolio);
            $newPortfolio->save();

        }
    }
}
