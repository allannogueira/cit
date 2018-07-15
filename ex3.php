<?php
    
    $dir = dir("arq");
    $ext = [];
    $i = 1;
    
    while($arqs = $dir->read()){
        if($arqs != "." && $arqs != ".."){
            $exts[] = pathinfo($arqs, PATHINFO_EXTENSION); //passa as extensoes para o array
            
        }
        
    }
    $dir->close();

    asort($exts);//ordena as extensões

    
    foreach($exts as $arr => $value){
        echo $i++." .".$value;
        echo "<br/>";
    }
?>