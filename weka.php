<?php

    include"config.php";
    include"nev.php";
?>

<html>
<head>
    <title>สร้างโมเดลการทดสอบ</title>
</head>
<body>
<div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row" >
                    <div class="col-lg-12">
                        <h2>สร้างโมเดล</h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="glyphicon glyphicon-log-out"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-tree-deciduous"></i> สร้างโมเดล
                            </li>
                        </ol>
                    </div>
                </div>
<center><div class="form-head-time">สร้างโมเดล Tree-J48</div></center>

                <div class="container-fluid" style="background-color: #FCFCFC; border: #846F00 solid 1px; border-radius: 0 0 20px 20px;">
                </div>
<div class="container-fluid" style=" background-color: #eee; border-bottom: #846F00 solid 2px;">
<?php

	$cmd = "java -cp weka.jar weka.classifiers.trees.J48 -t weka.arff -d wekaa.model";
	exec($cmd, $output);
	// //echo $output;
	// 	$strFileName ="Hello1.txt";
	// 		$objFopen = fopen($strFileName, 'w');
	// 		$strText2 ="\r\n";
	// 		fwrite($objFopen, $strText2);
	// 		fclose($objFopen);
	for ($i = 0; $i<sizeof($output); $i++)
	{
			trim($output[$i]);
			echo $output[$i]."<br>";

		}

	for ($i = 4; $i<sizeof($output); $i++)
	{

		if(substr($output[$i], 0, 1) == "("){

			break;
		
			
			$strFileName ="Hello1.txt";
			$objFopen = fopen($strFileName, 'a');
			$strText2 ="\r\n";
			fwrite($objFopen, $output[$i]);
			fwrite($objFopen, $strText2);
			fclose($objFopen);
		}
	}
	

?>
</div>
                </div>
                <!-- <div class="intro-heading" style="padding: 10px 0 50px 0;">
                </div> -->
                </center>
            </div>
             </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>

