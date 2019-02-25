<?php
//arrays
$names=["Mary","Musa","Mike","Moha","Mendi","jack"];
$ages=[12,34,56,98,19,78,12,23,25,27,87,56,79,];
echo $names[0];
echo"<hr>";
echo $ages[0];

foreach ($names as $jina )
{
    echo "$jina <br>";
}



echo"<hr>";
echo sizeof($names);//count the # of the names
echo "<hr>";
array_push($names,"Bush") ;

echo sizeof($names);
echo "<hr>";
var_dump($names);

echo "<hr>";
array_pop($names);
   var_dump($names);
echo "<hr>";
rsort($ages);
foreach($ages as $miaka )
{
   echo" $miaka<br>";
}
echo"<hr>";
echo array_sum($ages);
echo"<hr>";
//associative array
$person=["names"=>"Moha Musa", "age"=>61,"color"=>"black"];

echo$person["names"];
echo"<hr>";
echo$person["age"];
echo"<hr>";
echo$person["color"];

