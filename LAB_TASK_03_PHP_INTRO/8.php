<?php
$values= array 
(
  array(1,2,3,'A'),
  array(1,2,'B','C'),
  array(1,'D','E','F')
);

$count = count($values[0]) - 1;
for($i = 0; $i < count($values); $i++)
{

	for($j = 0; $j < $count; $j++)
    {
		echo $values[$i][$j];
	}
	$count--;
	echo "<br>";
}
echo "<br>";

$count = count($values[0]) - 1 ;

for($i = 0; $i < count($values); $i++)
{

	for($j = $count; $j < count($values[0]); $j++)
    {
		echo $values[$i][$j];
	}
	$count--;
	echo "<br>";
}