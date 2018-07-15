<?php

    $arqXML='test.xml';

    if (file_exists($arqXML)) 
    {
       $xml = simplexml_load_file($arqXML);
       $f = fopen('test.csv', 'w');
       createCsv($xml, $f);
       fclose($f);
    }

    function createCsv($xml,$f)
    {
        foreach($xml->children() as $item) 
        {
            $child = (count($item->children()) > 0)?true:false;

            if(!$child)
            {
                $put_arr = array($item->getName(),$item); 
                fputcsv($f, $put_arr ,',','"');
            }
            else
            {
                createCsv($item, $f);
            }
        }
    }

?>