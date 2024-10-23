<?php 
        $name = "Jericho";
        $age = 25;
        $hoby = ['coding','eating','reading'];
        $animals = [
            [
                'name'=>"Whale",
                'type'=>"Mammal",
                'habitat'=>"ocean"
            ],
            [
                'name'=>"sname",
                'type'=>"reptile",
                'habitat'=>"wilderness"
            ],
            [
                'name'=>"lion",
                'type'=>"Mammal",
                'habitat'=>"jungle"
            ],
            [
                'name'=>"chicken",
                'type'=>"bird",
                'habitat'=>"farm"
            ]
        ];
        function filter($items,$trigger){
            $filteredItems = [];
            
            foreach($items as $item){
                if($trigger($item)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredAnimals = filter($animals,function($animal){
            return $animal["type"]==="Mammal";
        });
        include 'index.view.php';