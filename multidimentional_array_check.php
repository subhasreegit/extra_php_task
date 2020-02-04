<?php 
 
function multidimentional_array_difference($arr1, $arr2){
    $arrDiff = array();
    foreach($arr1 as $key => $val) {
        if(isset($arr2[$key])){
        	if(is_array($val)){
        		$arrDiff[$key] = multidimentional_array_difference($val, $arr2[$key]);
        	}else{
        		if(in_array($val, $arr2)!=1){
        			$arrDiff[$key] = $val;
        		}
        	}
        }else{
        	$arrDiff[$key] = $val;
        }
    }
    return $arrDiff;
}

?>