<?php

$a= array(array("airi","jhk","hk","090","99","blah"),array("ange","jjh","lon","08","98","blah"));
$c= json_encode($a);

//echo $_REQUEST['recordsTotal'];
$c='{"draw":1, "recordsTotal":'.sizeof($a).', "data":'.$c.'}'; 
echo $c;
?>