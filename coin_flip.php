<?
//coin flip
$H = $C = 0;
$graph = array(); // 

function flip($n){
    $coin = ['H','C'];
    
    while($i < $n){
        // flip
        $res = array_rand($coin);
        $i++;
        freq($coin[$res]);
        grapher($coin[$res]);
    }
}

function freq($side){
    global $H;
    global $C;
    
    if($side === 'H'){
        $H++;
    }else{ 
        $C++;
    }
}

function grapher($side){
    global $graph;
    
    // x and y coordinates
    static $i = 0; // index is x axis
    static $y = 0; // y axis
    
    if($side === 'H'){
        $graph[$i++] = $y += 1;
    }else{
        $graph[$i++] = $y -= 1;
    }
}


    for($i=0; $i<$val.lenght; $i++){
        echo $val[$i];
    }
 

//test
flip(100);
// var_dump($graph);
echo '<br>';
echo json_encode($graph,JSON_PRETTY_PRINT);
// output($graph);




/*
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');


$fp = fopen('php://output', 'wb');
foreach ( $graph as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
*/

?>