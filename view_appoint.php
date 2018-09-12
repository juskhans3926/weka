<?php 
    include"config.php";
    include"./nev.php";
    // include"./insert_q.php";


    ?>
<html>
  <link rel="stylesheet" media="all" type="text/css" href="../date/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../date/jquery-ui-timepicker-addon.css" />

    <!-- <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="../date/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="../date/jquery-ui-sliderAccess.js"></script>
<script type="text/javascript">
  
  function showInsertQ() {
   document.getElementById('insert_q').style.display = "block";
   document.getElementById('insertq_b').style.display = "none";
   document.getElementById('insertq_bb').style.display = "block";
}

function hidInsertQ() {
   document.getElementById('insert_q').style.display = "none";
   document.getElementById('insertq_b').style.display = "block";
   document.getElementById('insertq_bb').style.display = "none";
}    

</script>
<body>
<div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row" >
                    <div class="col-lg-12">
                        <h2>ตารางวัน/เวลาว่าง</h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="glyphicon glyphicon-log-out"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-clock-o"></i>  เพิ่มวัน/เวลา
                            </li>
                        </ol>
                    </div>
                </div>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
  $date = date('Y-m-d H:s:i');
	$sql = "SELECT * FROM doctor_freetime,doctor 
          WHERE  doctor_freetime.doct_freetime > '".$date."' AND doctor_freetime.users_q = '".$result["users_username"]."' AND doctor_freetime.doct_id = doctor.doct_id";

	$query = mysqli_query($conn,$sql);
 
?>
<!-- <center><div class="form-head-time">ตารางวัน/เวลาว่าง</div></center> -->

             <!--    <div class="container-fluid" style="background-color: #FDFDFD; border: #846F00 solid 1px; border-radius: 0 0 20px 20px;">
                </div> -->

<div class="container-fluid" style="background-color: #fff; border-bottom: #846F00 solid 2px;">
  <div class="row" style="border: blue solid 0px; margin-top: 2%; ">
    <div class="col-sm-12" style="border: red solid 0px;">

      <div class="row" style="border: blue solid 0px;">
        <div class="col-sm-12" style="border: red solid 0px;">
          <span style="text-align: left;">
            
      <div id="startDate" >
        <script type="text/javascript">

        $(function(){
          $("#dateInput").datetimepicker({
            dateFormat: 'yy-m-dd',
            timeFormat: "HH:mm"
          });
        });
        </script>
        <div class="container-fluid" id="insert_q"  style="display: none; text-align: center; background-color: #eee;">
          <div class="row">
            <div class="col-sm-12">
            <form name="form1" method="post" action="insert_q2.php">
            <label>กรุณาระบุวันและเวลาที่ว่าง &nbsp;:&nbsp;&nbsp;</label><label><input  class="form-control" type="text" name="dateInput" id="dateInput" /></label>
            </div>
          </div>
          <div class="row" style="border: red solid 0px; padding: 3% 0 5% 0;">
            <div class="col-sm-12">
            <input  class="btn btn-update" type="submit" name="Submit" value="บันทึก">
            </form>
            </div>
          </div>
      </div>


      <table class="table" style="text-align: center; ">
        <thead>
        <tr style="background-color: #FFAE2A;">
          <!-- <th width="91" style="border-radius: 20px 0 0 0;">
            <div  align="center" >DoctorID </div>
          </th> -->
          <th width="120" style="border-radius: 20px 0 0 0;"> 
            <div align="center" >วัน/เวลา </div>
          </th>
         <!--  <th width="98"> 
            <div align="center" > การจอง </div>
          </th>
          <th width="98"> 
            <div align="center"> รายละเอียดการจอง </div>
          </th>
          <th width="98" style="border-radius: 0 20px 0 0;"> 
            <div align="center">ลบ </div>
          </th> -->
        </tr>
        </thead>
        <tbody>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td>
      <?php echo $result["doct_freetime"]."&nbsp;&nbsp;&nbsp;&nbsp;".$result["users_firstname"]."&nbsp;&nbsp;&nbsp;&nbsp;".$result["users_lastname"];?>
    </td>
    
  </tr>
<?php
}
?>
</tbody>
</table>
<?php
mysqli_close($conn);
?>
    <!-- <form name="form1" method="post" action="insert_q2.php"> -->
   <!--  <label>กรุณาระบุวันและเวลาที่ว่าง &nbsp;:&nbsp;&nbsp;</label><label><input  class="form-control" type="text" name="dateInput" id="dateInput" /></label> -->
    </div>
  </div>
  <div class="row" style="border: red solid 0px; padding: 3% 0 5% 0;">
    <div class="col-sm-12">
    <!-- <input  class="btn btn-update" type="submit" name="Submit" value="บันทึก"> -->
    <!-- </form> -->
    </div>
  </div>
</div>

<!-- </div> -->

      </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>