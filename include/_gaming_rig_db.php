<?php
$x_mem_types = array(
	"SDRAM"=>"SDRAM", 
	"DDR"=>"DDR", 
    "DDR2"=>"DDR2", 
    "DDR3"=>"DDR3", 
    "DDR4"=>"DDR4", 
	"Other..." => "Other...");

$x_mem_sizes = array(
	"1"=>"1GB",
	"2"=>"2GB",
	"4"=>"4GB",
    "8"=>"8GB",
	"16"=>"16GB",
	"32"=>"32GB", 
    "64"=>"64GB",
	"128"=>"128GB");

$x_storage = array();
for($i=20;$i<=5000;$i+=20) {
	$x_storage[$i] = $i." GB";
}
$x_processors = array(
	"AMD" => "AMD",
	"Intel" => "Intel",
	"ARM" => "ARM",
	"PowerPC" => "PowerPC",
	"Other..." => "Other..."
);

$x_gpus = array(
	"ATI" => "AMD",
	"Nvidia" => "Nvidia",
	"Intel" => "Intel",	
	"3Dfx" => "3Dfx",
	"Matrox" => "Matrox",
	"Other..." => "Other..."
);

// keyword searches
/*
$x_ati = array('ati','radeon','rage','xpert','firegl');
$x_nvidia = array('geforce','gefroce','gf4','gf3','annihilator','vidia','quadro','nforce','n-force','tnt');

function logo_return($keywords, $field, $userid) {
	global $dbc;
	$bool = false;
	if(sizeof($keywords)>0) {
		foreach($keywords as $val) {
			if($dbc->database_num_rows($dbc->database_query("SELECT * FROM users WHERE ".$field." LIKE '%".$val."%' AND userid='".$userid."'"))) {
				$bool = true;
			}
		}
	}
	return $bool;
}
*/
?>
