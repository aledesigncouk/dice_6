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
        $y += 1;
        array_push($graph,'{ "y":'.$y.', "x": '.$i.'}' );
        $i++;
    }else{
        $y -= 1;
        array_push($graph,'{"y":'.$y.',"x": '.$i.'}' );
        $i++;
    }
}

//test
flip(100);

echo json_encode($graph);

?>