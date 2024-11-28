<?php

namespace Bdd;
class  Data
{

    private $baseImage = "/images/projects/";
    private $baseLink = "/projet/";

//we will search image in/images/projects
//unique name must be withouth space in camel case like : MyProject
    public $projects;

    public function __construct()
    {
        $this->projects = [
            [
                "image" => $this->baseImage . 'MeyPortfolio.png',
                "uniqueName" => $this->baseLink . 'MeyPortfolio',
                "title" => "Portfolio Mey Detour",
                "description" => " 4 NIVEAU DE CONCEPTION  ( éco-efficacité) optimisation technique (éco -reconception )architecture et choix des technologieinnovation fonctionnelleSolution radicale innovation de rupture (eco innovation )Mise en oeuvre projet itérative :1 - modélisation -> impacts environnementaux 2 - constitution -> référentiels des bonnes pratiques3- formation -> sensibiliser des equipé concernée4- mise en oeuvre -> bonnes pratiques dè",
                "link" => "https://www.meydetour.com/",
                "images"=>[
                    "MeyPortfolio.png"
                ]
            ]   , [
                "image" => $this->baseImage . 'MeyPortfolio.png',
                "uniqueName" => $this->baseLink . 'MeyPortfolio2',
                "title" => "Portfolio Mey Detour 2 ",
                "description" => " 4 NIVEAU DE CONCEPTION  ( éco-efficacité) optimisation technique (éco -reconception )architecture et choix des technologieinnovation fonctionnelleSolution radicale innovation de rupture (eco innovation )Mise en oeuvre projet itérative :1 - modélisation -> impacts environnementaux 2 - constitution -> référentiels des bonnes pratiques3- formation -> sensibiliser des equipé concernée4- mise en oeuvre -> bonnes pratiques dè",
                "link" => "https://www.meydetour.com/",
                "images"=>[
                    "jsp/jsp1.png",
                    "jsp/jsp2.png"
                ]
            ]

        ];

    }

    public function getProjectByUniqueName($name)
    {
        foreach ($this->projects as $project) {
            if ($project['uniqueName'] == $this->baseLink . $name) {
                return $project;
            }
        }
        throw new \Exception();
    }


}


