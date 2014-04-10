<?php
function fibonacci($n){
	$prev = 0;
	$result = 1;
	if( $n < 2 ) return $n;
	foreach (range(1,$n-1) as $i){
		list( $prev, $result ) = array($result, $result + $prev);
	}
	return $result;
}
?>