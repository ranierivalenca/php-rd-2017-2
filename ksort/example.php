<?php 
$people = array( 
array("name"=>"Bob","age"=>8,"colour"=>"red"), 
array("name"=>"Greg","age"=>12,"colour"=>"blue"), 
array("name"=>"Andy","age"=>5,"colour"=>"purple")); 

var_dump($people); 

$sortArray = array(); 

foreach($people as $person){ 
    foreach($person as $key=>$value){ 
        if(!isset($sortArray[$key])){ 
            $sortArray[$key] = array(); 
        } 
        $sortArray[$key][] = $value; 
    } 
} 

$orderby = "name";  

array_multisort($sortArray[$orderby],SORT_DESC,$people); 

var_dump($people); 
?> 

 var_dump: 

[0]=&gt; 
  array(3) { 
    ["name"]=&gt; 
    string(3) "Bob" 
    ["age"]=&gt; 
    int(8) 
    ["colour"]=&gt; 
    string(3) "red" 
  } 
  [1]=&gt; 
  array(3) { 
    ["name"]=&gt; 

    string(4) "Greg" 
    ["age"]=&gt; 
    int(12) 
    ["colour"]=&gt; 
    string(4) "blue" 
  } 
  [2]=&gt; 
  array(3) { 
    ["name"]=&gt; 
    string(4) "Andy" 
    ["age"]=&gt; 
    int(5) 
    ["colour"]=&gt; 

    string(6) "purple" 
  } 
} 