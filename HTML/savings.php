<?php
$members=array();
/* Declaration of members */
$member_1=array(
	"name"=>"Brian",
	"surname"=>"Tan",
	"age"=>28,
	"savings"=>28000,
);
$member_2=array(
	"name"=>"Kenneth",
	"surname"=>"Tang",
	"age"=>29,	
	"savings"=>29000,
);
$member_3=array(
	"name"=>"Sharon",
	"surname"=>"Tang",
	"age"=>30,	
	"savings"=>30000,
);

/* End of declaration of members */
//Let's push all the member into $members array
array_push($members,$member_1);
array_push($members,$member_2);
array_push($members,$member_3);

$return=array();
$return["members"]=array();
$return["members"]=$members;
//Json encode
//Try this 1, then comment it and try the next line. View the difference in "View Source"
//if ($_REQUEST['action'] == "listSavings") {
	echo json_encode($return, JSON_PRETTY_PRINT);
//}
