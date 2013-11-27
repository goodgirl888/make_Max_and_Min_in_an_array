<?php
function get_max_and_min($array)
{
	// sort($samplearray);
	$length_of_array=count($array);
	for($i=0; $i<$length_of_array; $i++){
		if($i==0)
		{
			$Max=$array[$i];
			$Min=$array[$i];
		}
		else{
			if ($Max<$array[$i])
			{
		 		$Max=$array[$i];
		 	}
			if ($Min>$array[$i])
			{
				$Min=$array[$i];
			}	
		}
	}


	
	echo "Max-->".$Max."<br/>";
 	echo "Min-->".$Min."<br/>";


	// }
}

$array = array(135, 400, 60, 170, 20, 50);
get_max_and_min($array)


	










?>