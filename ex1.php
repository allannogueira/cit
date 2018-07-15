<?php

    $location['pais'] = [
                            0 => 'A capital do Brasil', 
                            1 => 'A capital dos EUA', 
                            2 => 'A capital da Espanha',
                            3 => 'A capital da Alemanha',
                            4 => 'A capital da Albânia',
                        ];

    $location['capital'] = [
                                0 => 'Brasilia', 
                                1 => 'Washington', 
                                2 => 'Madrid',
                                3 => 'Berlim',
                                4 => 'Tirana'
                            ];

    asort($location['capital']);
    
    foreach($location['capital'] as $key => $value){
        echo $location['pais'][$key]." é ".$location['capital'][$key]."<br/>";
    }

?>