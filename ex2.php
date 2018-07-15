<?php

function foiMordido(){
    if(rand(0,1)==0){
        return false;
    }else{
        return true;
    }
}

if(foiMordido()){
    echo 'Joãozinho mordeu o seu dedo !';
}else{
    echo 'Joãozinho não mordeu o seu dedo !';
}

?>