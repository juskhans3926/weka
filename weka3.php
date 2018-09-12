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
<center><div class="form-head-time">ตรวจสอบหมายเลขประจำตัวผู้ป่วย</div></center>

                <div class="container-fluid" style="background-color: #FCFCFC; border: #846F00 solid 1px; border-radius: 0 0 20px 20px;">
                </div>
<div class="container-fluid" style="text-align: center; background-color: #eee; padding-bottom: 5%; border-bottom: #846F00 solid 2px;">

<?php
  ini_set('display_errors', 1);
  error_reporting(~0);

  $strKeyword = null;

  if(isset($_POST["txtKeyword"]))
  {
    $strKeyword = $_POST["txtKeyword"];
  }
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <div class="row" style="margin: 5% 0 0 0;">
   <div class="col-sm-12">
  
      <label>กรอกหมายเลขผู้ป่วย HN &nbsp;:&nbsp;</label>
      <label><input class="form-control" name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>"></label>
      <label><input class="btn btn-update" type="submit" value="Search"></label>
</form>

  <?php
  // session_start();
     include("config.php");
     $sql = "SELECT * FROM patient_weka WHERE hn = '".$strKeyword."' ";
     $query = mysqli_query($conn,$sql);
?>
<div class="row">
  <div class="col-sm-3" style="background-color: #ffcb4f; border: #777 solid 0 2px 0 0;">
   <div align="center">HN </div>
   </div>
   <div class="col-sm-3" style="background-color: #ffcb4f;">
   <div align="center">ชื่อ </div>
   </div>
   <div class="col-sm-3" style="background-color: #ffcb4f;">
   <div align="center">สกุล</div>
   </div>
   <div class="col-sm-3" style="background-color: #ffcb4f;">
   <div align="center" style="color: #ffcb4f;">select</div>
   </div>
</div>
  
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$_SESSION["patient_id"] = $result["patient_id"];
$_SESSION["patient_age"] = $result["patient_age"];
$_SESSION["patient_gender"] = $result["patient_gender"];
$_SESSION["occupation_id"] = $result["occupation_id"];
$_SESSION["icd_id"] = $result["icd_id"];
$_SESSION["opt_b31_id"] = $result["opt_b31_id"];
$_SESSION["opt_b32_id"] = $result["opt_b32_id"];
$_SESSION["check_symptom"] = $result["check_symptom"];
$_SESSION["b6"] = $result["b6"];
$_SESSION["d2"] = $result["d2"];
?>
<div class="row" style="border-bottom: #ffc410 solid 2px; background-color: #FFFEFA;">
  <div class="col-sm-3" >
   <div align="center"><?php echo $result["hn"];?></div>
   </div>
   <div class="col-sm-3">
   <?php echo $result["patient_firstname"];?>
   </div>
   <div class="col-sm-3">
   <?php echo $result["patient_lastname"];?>
   </div>
   <div class="col-sm-3">
  <div align="center"><a href="weka3_select.php?CusID=<?php echo $_SESSION["patient_id"];?>">เลือก</a>
   </div>
</div>
</div>
<?php
}
?>
<?php
   $sql = "SELECT * FROM c1 WHERE patient_id = '".@$_SESSION["patient_id"]."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   $_SESSION["opt_c1_id"] = $result["opt_c1_id"];
   // echo $_SESSION["opt_c1_id"];
   $sql = "SELECT * FROM c2 WHERE patient_id = '".@$_SESSION["patient_id"]."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   $_SESSION["opt_c2_id"] = $result["opt_c2_id"];
   // echo $_SESSION["opt_c2_id"];
   $sql = "SELECT * FROM c3 WHERE patient_id = '".@$_SESSION["patient_id"]."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   $_SESSION["opt_c3_id"] = $result["opt_c3_id"];
   // echo $_SESSION["opt_c3_id"];
   $sql = "SELECT * FROM b9 WHERE patient_id = '".@$_SESSION["patient_id"]."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   $_SESSION["opt_b9_id"] = $result["opt_b9_id"];
   //echo $_SESSION["opt_b9_id"];
mysqli_close($conn);
?>
</div>
             </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>