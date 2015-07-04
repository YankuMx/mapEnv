<?php

    $res = $_POST["var_00"] + $_POST["var_01"] + $_POST["var_02"] + $_POST["var_03"] + $_POST["var_04"];
    $res += $_POST["var_05"] + $_POST["var_06"] + $_POST["var_07"] + $_POST["var_08"] + $_POST["var_09"];
    $res += $_POST["var_10"] + $_POST["var_11"] + $_POST["var_12"] + $_POST["var_13"] + $_POST["var_14"];
    $res += $_POST["var_15"] + $_POST["var_16"] + $_POST["var_17"] + $_POST["var_18"] + $_POST["var_19"];


    if($res >= 1300)
    {
        $r = "green";
    }
    elseif($res < 1300 & $res >= 600)
    {
        $r = "orange";
    }
    elseif($res < 600)
    {
        $r = "red";
    }
    else{
        $r = "gray";
    }


    // Parte entera
    $neLat0= (int)floor($_POST["neLat"]);
    $neLng0= (int)ceil($_POST["neLng"]);
    $swLat0= (int)floor($_POST["swLat"]);
    $swLng0= (int)ceil($_POST["swLng"]);


    // parte decimal con signo como numero
    $neLat1= $_POST["neLat"] - $neLat0;
    $neLng1= ($_POST["neLng"] + (-1) * $neLng0);
    $swLat1= $_POST["swLat"] - $swLat0;
    $swLng1= ($_POST["swLng"] + (-1) * $swLng0);

    // parte decimal con signo como string
    $neLat2= strval($neLat1);
    $neLng2= strval($neLng1);
    $swLat2= strval($swLat1);
    $swLng2= strval($swLng1);

    // parte decimal sin "-0." como string
    $neLat3= substr($neLat2, strpos($neLat2, ".") + 1);
    $neLng3= substr($neLng2, strpos($neLng2, ".") + 1);
    $swLat3= substr($swLat2, strpos($swLat2, ".") + 1);
    $swLng3= substr($swLng2, strpos($swLng2, ".") + 1);



    for($j = 0; $j != strlen($neLat3); $j++)
    {
        $lat[0][$j]= (int) substr($neLat3,$j,1); 
    }
    for($j = 0; $j != strlen($neLat3); $j++)
    {
        $lat[1][$j]= (int) substr($swLat3,$j,1); 
    }
    
    
    for($j = 0; $j != strlen($neLng3); $j++)
    {
        $lng[0][$j]= (int) substr($neLng3,$j,1); 
    }
    for($j = 0; $j != strlen($neLng3); $j++)
    {
        $lng[1][$j]= (int) substr($swLng3,$j,1);
    }

    /*
    echo $neLat0. "\n";
    echo $neLng0. "\n";
    echo $swLat0. "\n";
    echo $swLng0. "\n";


    echo $neLat1. "\n";
    echo $neLng1. "\n";
    echo $swLat1. "\n";
    echo $swLng1. "\n";

    echo $neLat2. "\n";
    echo $neLng2. "\n";
    echo $swLat2. "\n";
    echo $swLng2. "\n";

    echo $neLat3. "\n";
    echo $neLng3. "\n";
    echo $swLat3. "\n";
    echo $swLng3. "\n";

    var_dump($lat[0]);
    var_dump($lat[1]);
    var_dump($lng[0]);
    var_dump($lng[1]);
    */

    for($i = 0; $i != 600; $i++)
    {
        $latFT = "0.";
        for($j = 0; $j != strlen($neLat3); $j++)
        {
            if($j == 1)
            {
                $latFT .= strval(mt_rand((int)$lat[1][$j],(int)$lat[0][$j]));
            }
            else
            {
                $latFT .= strval(mt_rand(0,(int)$lat[0][$j]));
            }
                
                
            //$latFT .= strval(mt_rand((int)$lat[1][$j],(int)$lat[0][$j]));
        }
        $latF = mt_rand($swLat0,$neLat0) + floatval($latFT);

        $lngFT = "0.";
        for($j = 0; $j != strlen($neLng3); $j++)
        {
            if($j == 1)
            {
                $lngFT .= strval(mt_rand((int)$lng[1][$j],(int)$lng[0][$j]));
            }
            else
            {
                $lngFT .= strval(mt_rand(0,(int)$lng[0][$j]));
            }
        }
        $lngF = mt_rand($swLng0,$neLng0) + floatval($lngFT); 

        $final[] = array("type" => "Point", "coordinates" => array($latF, $lngF), "v" => $r);
    }











for($i = 0; $i != 600; $i++)
    {
        $latFT = "0.";
        
        $ent = mt_rand($swLat0,$neLat0);
        if($ent == $neLat0)
        {
            for($j = 0; $j != strlen($neLat3); $j++)
            {
                if($j == 1)
                {
                    $latFT .= strval(mt_rand((int)$lat[1][$j],(int)$lat[0][$j]));
                }
                else
                {
                    $latFT .= strval(mt_rand(0,(int)$lat[0][$j]));
                }
            }
        }
        else
        {
            for($j = 0; $j != strlen($neLat3); $j++)
            {
                $latFT .= strval(mt_rand(0,9));
            }
        }
        $latF = $ent + floatval($latFT);
                                 
                                 

        $lngFT = "0.";
        $ent = mt_rand($swLng0,$neLng0);
         if($ent == $neLng0)
         {
            for($j = 0; $j != strlen($neLng3); $j++)
            {
                if($j == 1)
                {
                    $lngFT .= strval(mt_rand((int)$lng[1][$j],(int)$lng[0][$j]));
                }
                else
                {
                    $lngFT .= strval(mt_rand(0,(int)$lng[0][$j]));
                }
            }
         }
         else{
            for($j = 0; $j != strlen($neLng3); $j++)
            {
                $lngFT .= strval(mt_rand(0,9));
            }
         }
        
        $lngF = $ent + floatval($lngFT); 

        $final[] = array("type" => "Point", "coordinates" => array($latF, $lngF), "v" => $r);
    }

    echo json_encode($final);
?>