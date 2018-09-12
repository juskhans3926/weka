<?php
include"config.php";

include"nev.php";
?>

<html>
<body>
<div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row" >
                    <div class="col-lg-12">
                        <h2>ทำนายพฤติกรรมผู้ป่วย</h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="glyphicon glyphicon-log-out"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-expand"></i> ทำนายพฤติกรรมผู้ป่วย
                            </li>
                        </ol>
                    </div>
                </div>
<center><div class="form-head-time">ผลการทำนาย</div></center>

                <div class="container-fluid" style="background-color: #FCFCFC; border: #846F00 solid 1px; border-radius: 0 0 20px 20px;">
                </div>
<div class="container-fluid" style="text-align: center; background-color: #eee; padding: 0 0 5% 0; border-bottom: #846F00 solid 2px;">

 <div class="row" style="border: blue solid 0px; margin: 2% 0 2% 0; ">
        <div class="col-sm-12" style="border: red solid 0px;">
       <img src="backend/icons/aviso.png" style="width: 100px;">
        </div>
    </div>

<?php
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'w');
$strText2 = "@relation patient\r\n\r\n@attribute patient_age {";
fwrite($objFopen, $strText2);
fclose($objFopen);
?> 
<?php
//patientAge
include("config.php");
$sql = "SELECT patient_weka.patient_age
FROM patient_weka
GROUP BY patient_weka.patient_age ORDER BY patient_weka.patient_age ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["patient_age"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//patientGender
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute patient_gender {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT patient_gender
FROM patient_weka
GROUP BY patient_gender ORDER BY patient_gender ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["patient_gender"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//judgeId
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute occupation_id {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT occupation_id
FROM patient_weka
GROUP BY occupation_id ORDER BY occupation_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["occupation_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//icdId
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute icd_id {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT icd_id
FROM patient_weka
GROUP BY icd_id ORDER BY icd_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["icd_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//optionB31ID
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute option_b31_id {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_b31_id
FROM patient_weka
GROUP BY opt_b31_id ORDER BY opt_b31_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_b31_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//optionB32Id
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute option_b32_id {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_b32_id
FROM patient_weka
GROUP BY opt_b32_id ORDER BY opt_b32_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_b32_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//checkSymptom
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute check_symptom {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT check_symptom
FROM patient_weka
GROUP BY check_symptom ORDER BY check_symptom ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["check_symptom"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//B6
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute b6 {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT b6
FROM patient_weka
GROUP BY b6 ORDER BY b6 ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["b6"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//d2
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute d2 {";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT d2
FROM patient_weka
GROUP BY d2 ORDER BY d2 ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["d2"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//c1EventId
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute opt_c1_id {NULL,";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_c1_id
FROM c1
GROUP BY opt_c1_id ORDER BY opt_c1_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_c1_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//c2EventId
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute opt_c2_id {NULL,";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_c2_id
FROM c2
GROUP BY opt_c2_id ORDER BY opt_c2_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_c2_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
//c3EventId
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute opt_c3_id {NULL,";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_c3_id
FROM c3
GROUP BY opt_c3_id ORDER BY opt_c3_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_c3_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}

$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n@attribute option_b9_id {NULL,";
fwrite($objFopen, $strText2);
fclose($objFopen);
$sql = "SELECT opt_b9_id
FROM b9
GROUP BY opt_b9_id ORDER BY opt_b9_id ASC";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["opt_b9_id"];
$strText1 .=",";
fwrite($objFopen, $strText1);
fclose($objFopen);
}
$strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText2 = "}\r\n\r\n@data\r\n";
fwrite($objFopen, $strText2);
fclose($objFopen);
?>




<?php
// include("config.php");
// $sql = "SELECT * FROM patient,c1,c2,c3,b9 WHERE patient.patient_id = '".$_GET["CusID"]."' and c1.patient_id = '".$_GET["CusID"]."' and c2.patient_id = '".$_GET["CusID"]."' and c3.patient_id = '".$_GET["CusID"]."' and b9.patient_id = '".$_GET["CusID"]."'";
// $query = mysqli_query($conn,$sql);
// while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
// if($query)
//  {
// session_start();
if($_SESSION["opt_c1_id"] == ""){
  $_SESSION["opt_c1_id"] = "NULL";
}
if($_SESSION["opt_c2_id"] == ""){
  $_SESSION["opt_c2_id"] = "NULL";
}
if($_SESSION["opt_c3_id"] == ""){
  $_SESSION["opt_c3_id"] = "NULL";
}
//echo $_SESSION["c2_event_id"];
//echo $_SESSION["patient_id"];
   $strFileName ="wekatest.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $_SESSION["patient_age"];
$strText1 .=",".$_SESSION["patient_gender"];
$strText1 .=",".$_SESSION["occupation_id"];
$strText1 .=",".$_SESSION["icd_id"];
$strText1 .=",".$_SESSION["opt_b31_id"];
$strText1 .=",".$_SESSION["opt_b32_id"];
$strText1 .=",".$_SESSION["check_symptom"];
$strText1 .=",".$_SESSION["b6"];
$strText1 .=",".$_SESSION["d2"];
$strText1 .=",".$_SESSION["opt_c1_id"];
$strText1 .=",".$_SESSION["opt_c2_id"];
$strText1 .=",".$_SESSION["opt_c3_id"];
$strText1 .=",?";
$strText2 = "\r\n";
fwrite($objFopen, $strText1);
fwrite($objFopen, $strText2);
 // }
 // else
 // {
 //   "ผลการทำนายรูปแบบการทำร้ายตนเองของผู้ป่วยรายนี้คือวิธี NULL";
 // }
 // }


// mysqli_close($conn);
?>

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
        if(@$arr[2]){
            $solut = substr($arr[2],0,4);

            $sql = "SELECT opt_b9_desc FROM opt_b9 WHERE opt_b9_id = '".$solut."' ";
            $query = mysqli_query($conn,$sql);
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{

            // echo $sql;
                
            echo "
                <div class='col-sm-12' style='font-size:30px;'>ผลการทำนายรูปแบบการทำร้ายตนเองของผู้ป่วยรายนี้คือวิธี </div><br/>
                <div class='container-fluid' style='margin-top: 25px; width:50%; padding-top: 25px; min-height: 100px; background-color:#ffcb4f !important; border-radius: 20px 20px 20px 20px;'>
                <div class='col-sm-12' style='color:#EE4035; font-size: 35px;'>"
                .$result['opt_b9_desc'].
                "</div></div><br/>
                 <div class='col-sm-12'><a href='weka3.php' style='font-size:25px;'> <i class='fa fa-chevron-left'></i> กลับไปยังหน้าค้นหาผู้ป่วยเพื่อทำนาย</a></div><br/>
                ";
}
          break;
        }
        }
  }
  
?> 
</div>
          </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>