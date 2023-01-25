<!DOCTYPE html>
<html>
<body>

<h1>Apple and pear garden</h1>

<?php
$appletrees=randarr(10, 40, 50); // Apple trees are planted    

echo "Here are APPLE trees: ";    
print_r($appletrees);
    echo "<br/>";
    
$peartrees=randarr(15, 0, 20);   // Pear trees are planted    

echo "Here are PEAR trees: ";    
print_r($peartrees);
    echo "<br/>";	
	
function randarr( $N, $min = 0, $max = 100) {
    return array_map(
        function() use( $min, $max) {
            return rand( $min, $max);
        },
        array_pad( [], $N, 0)
    );
}

function fruitgatherer($trees){    
for ($n = 0; $n < count($trees); $n++) { 
	
$basket[]=$trees[$n];

}
echo array_sum($basket);
}

echo "Apples quantity: ";  
print_r(fruitgatherer($appletrees)); 
    echo "<br/>";
echo "Pears quantity: ";     
print_r(fruitgatherer($peartrees)); 
    echo "<br/>";
  
  
    
?> 

</body>
</html>