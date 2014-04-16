<?php

function factorial($fact){
	$factorial = 1;
	if( $fact == 0 ) return $fact;
	if( $fact == 1 ) return $fact;
	while( $fact >= 2 ){
		$factorial *= $fact;
		--$fact;
	}
	return $factorial;
}

echo factorial($argv[1]);