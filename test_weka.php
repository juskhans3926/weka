<?php
include"config.php";
$pt_id = $_GET['pt_id'];

$sql = "SELECT patient_weka.patient_age,patient_weka.patient_gender,patient_weka.occupation_id,patient_weka.icd_id,patient_weka.opt_b31_id,patient_weka.opt_b32_id,patient_weka.check_symptom,patient_weka.b6,patient_weka.d2,c1.opt_c1_id,c2.opt_c2_id,c3.opt_c3_id,b9.opt_b9_id
FROM patient_weka,c1,c2,c3,b9
WHERE patient_weka.patient_id = '".$pt_id."' ";
// =echo $pt_id;
$query = mysqli_query($conn,$sql);
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
if($result["opt_c1_id"] == "" and $result["opt_c2_id"] == ""and $result["opt_c3_id"] == ""and $result["opt_b9_id"] == ""){
$strFileName ="weka2.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["patient_age"];
$strText1 .=",".$result["patient_gender"];
$strText1 .=",".$result["occupation_id"];
$strText1 .=",".$result["icd_id"];
$strText1 .=",".$result["opt_b31_id"];
$strText1 .=",".$result["opt_b32_id"];
$strText1 .=",".$result["check_symptom"];
$strText1 .=",".$result["b6"];
$strText1 .=",".$result["d2"];
$strText1 .=",NULL";
$strText1 .=",NULL";
$strText1 .=",NULL";
$strText1 .=",?";
$strText2 = "\r\n";
fwrite($objFopen, $strText1);
fwrite($objFopen, $strText2);
}
else{
$strFileName ="weka2.arff";
$objFopen = fopen($strFileName, 'a');
$strText1 = $result["patient_age"];
$strText1 .=",".$result["patient_gender"];
$strText1 .=",".$result["occupation_id"];
$strText1 .=",".$result["icd_id"];
$strText1 .=",".$result["opt_b31_id"];
$strText1 .=",".$result["opt_b32_id"];
$strText1 .=",".$result["check_symptom"];
$strText1 .=",".$result["b6"];
$strText1 .=",".$result["d2"];
$strText1 .=",".$result["opt_c1_id"];
$strText1 .=",".$result["opt_c2_id"];
$strText1 .=",".$result["opt_c3_id"];
$strText1 .=",?";
$strText2 = "\r\n";
fwrite($objFopen, $strText1);
fwrite($objFopen, $strText2);
}
}
if($objFopen)
{
    echo "File writed.";
}
else
{
    echo "File can not write";
}

fclose($objFopen);
?>