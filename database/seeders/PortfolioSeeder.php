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
                "title" => "Porfolio di Marco",
                "description" => "Porfolio magnifico di Marco",
                "thumb" => "https://s.tmimgcdn.com/scr/1200x750/339200/portfolio-di-architettura-portfolio-design-modello-portfolio-interni_339244-original.jpg"
            ]
        ];
        
        for($i=0; $i<sizeof($portfolios); $i++){
            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolios[$i]["title"];
            $new_portfolio->description = $portfolios[$i]["description"];
            $new_portfolio->thumb = $portfolios[$i]["thumb"];
            $new_portfolio->save();
        }
    }
}
