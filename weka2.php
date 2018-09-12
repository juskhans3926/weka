<?php

	//$cmd1= "java -cp weka.jar weka.classifiers.trees.J48 -T wekatest.arff -l wekaa.model -p 0";
	//exec($cmd1, $nn);

	//$cmd = 'java -cp "C:\xampp\htdocs\weka\weka.jar" weka.classifiers.trees.J48 -T "C:\xampp\htdocs\weka\wekatest.arff" -l "C:\xampp\htdocs\weka\wekaa.model" -p 0';
	$cmd = 'java -cp weka.jar weka.classifiers.trees.J48 -T wekatest.arff -l wekaa.model -p 0';
	exec($cmd, $output);
	//print_r($output);
	
	for ($i = 0; $i<sizeof($output); $i++)
	{
			  if($i == sizeof($output) - 2 ){
				
				trim($output[$i]);
				//echo $output[$i]."<br>";
				   $arr = explode(":", $output[$i]);
				   echo "ผลการทำนายรูปแบบการทำร้ายตนเองของผู้ป่วยรายนี้คือวิธี ".substr($arr[2],0,4)."<br>";
				   break;
			  }
	}
	
?>