<?php  
$arr2 = array("pic1","pic2","pic10","pic01","pic100","pic20","pic30","pic200");

echo "Natural order string comparison"."<br>";
usort($arr2,"strnatcmp");

print_r($arr2);
?>