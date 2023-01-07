<?php
function bubbleSort($arr)
{
	do
	{
		$swapped = false;
		for( $i = 0, $c = count($arr) - 1; $i < $c; $i++ )
		{
			if($arr[$i] > $arr[$i + 1] )
			{
				list($arr[$i + 1], $arr[$i] ) =
						array($arr[$i], $arr[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $arr;
}
 $test_array = array(24,123,543,54,0,34,6);
echo implode(", ",bubbleSort($test_array));
?>