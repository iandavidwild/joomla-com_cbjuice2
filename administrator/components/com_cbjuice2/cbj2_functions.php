<?php
/*  Default Fields manages the loading and defaulting of key fields
  * 
  */
function cbj2_default_fields($pointer,$record,$default=NULL){
	$return_value=$default;
	if($pointer>=0){
		$return_value=stripcslashes($record[$pointer]);
		} else
		{
			$return_value=$default;}
	return $return_value;
}
/* Find Pointer routine used to search keys in an array.
 * The routine is required to force false (no match) to be a specific value
 */
function cbj2_find_pointer($input_string,$headervbls){
	/*this function is to force array_seach to return negative on missing
	 * 
	 */
	$result=array_search($input_string,$headervbls);
	if($result===FALSE)$result=-1;
	return $result;
}
?>