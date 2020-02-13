<?PHP

$totaal = (int)$argv[1];

if ($totaal != 0){
    $wisselgeld = floor($totaal/10);
    echo $wisselgeld. " x €10 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 10;

    $wisselgeld = floor($totaal/5);
    if ($wisselgeld != 0){
    echo $wisselgeld. " x €5 billetten".PHP_EOL;
    $totaal -= $wisselgeld * 5;
    }

    $wisselgeld = floor($totaal/2);
    if ($wisselgeld != 0){
    echo $wisselgeld. " x €2 munten".PHP_EOL;
    $totaal -= $wisselgeld * 2;
    }
    
    $wisselgeld = floor($totaal/1);
    if ($wisselgeld != 0){
    echo $wisselgeld. " x €1 munten".PHP_EOL;
    $totaal -= $wisselgeld * 1;        
    }

}
else{
    echo"er is geen wisselgeld";
}

?>