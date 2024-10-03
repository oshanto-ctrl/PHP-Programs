<?php 

function binarySearch(Array $arr, $key){
	if(count($arr) === 0){
		return false;
	}

	$low = 0;
	$high = count($arr) - 1;

	while($low <= $high){
		// mid
		$mid = floor(($low + $high) / 2);

		if($arr[$mid] == $key){
			return true;
		}

		if($key < $arr[$mid]){
			$high = $mid - 1;
		} 

		else{
			$low = $mid + 1;
		}

	}

	return false;
}


// driver code

$arr = array(1,2,4,5,6,7,8,9,11,12,15,21,22,25,26,27,28);
$value = 1;

if(binarySearch($arr,$value) == true){
	echo "$value Exists\n";
}else{
	echo "$value Not Exists\n";
}

?>