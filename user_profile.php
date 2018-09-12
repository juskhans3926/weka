<html>
<body>
<?php
  include("nev-board.php");


?>


<script type="text/javascript">

    $(document).on("click", ".edit_pro", function () {
         var myEditId = $(this).data('id');
         $(".modal-body #id").val( myEditId );

         var myEditFname = $(this).data('fname');
         $(".modal-body #fname").val( myEditFname );

         var myEditLname = $(this).data('lname');
         $(".modal-body #lname").val( myEditLname );

         var myEditEmail = $(this).data('email');
         $(".modal-body #email").val( myEditEmail);

         var myEditPhone = $(this).data('phone');
         $(".modal-body #phone").val( myEditPhone);

         $('#edit_pro1').modal('show');
    });

 $(document).on("click", ".edit_pro_doct", function () {
         var myEditId = $(this).data('id');
         $(".modal-body #id").val( myEditId );

         var myEditFname = $(this).data('fname');
         $(".modal-body #fname").val( myEditFname );

         var myEditLname = $(this).data('lname');
         $(".modal-body #lname").val( myEditLname );

         var myEditEmail = $(this).data('email');
         $(".modal-body #email").val( myEditEmail);

         var myEditPhone = $(this).data('phone');
         $(".modal-body #phone").val( myEditPhone);

         var myEditPhone = $(this).data('profes');
         $(".modal-body #profes").val( myEditPhone);

         var myEditPhone = $(this).data('special');
         $(".modal-body #special").val( myEditPhone);

         $('#edit_proDoct').modal('show');
    });
</script>

<div class="modal" id="edit_proDoct" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">แก้ไข</h4>
            </div>
               <form action="Profile_save_doct.php" method="post">
                <div class="modal-body">
                        <input hidden="hidden" name="id" id="id" value="">
                    <!-- <label>ชื่อ<label>
                        <input class="form-control" type="text" id="fname" name="fname" value="<?php //echo $result["users_firstname"]; ?>"/> -->
                    <label>คำนำหน้า</label>
                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $result["title"]; ?>"/>
                    <label>ชื่่อ</label>
                        <input class="form-control" type="text" id="fname" name="fname" value="<?php echo $result["users_firstname"]; ?>"/>
                    <label>สกุล</label>
                        <input class="form-control" type="text" id="lname" name="lname" value="<?php echo $result["users_lastname"]; ?>"/>
                    <label>ชำนาญพิเศษ</label>
                        <input class="form-control" type="text" id="profes" name="profes" value="<?php echo $result["professional"]; ?>"/>  
                    <label>เฉพาะทาง</label>
                        <input class="form-control" type="text" id="special" name="special" value="<?php echo $result["specialist"]; ?>"/>  
                    <label>อีเมล</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?php echo $result["email"]; ?>"/>
                    <label>โทรศัพท์</label>
                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $result["phone"]; ?>"/>        
            	</div>
            	<div class="modal-footer">
                 	<input type="submit" class="form-control btn btn-save" id="submit" name="submit" value="แก้ไข">
                 	<button class="btn btn-update" id="submit" name="submit" data-dismiss="modal">ปิด</button> 
            	</div>
             </form>
        </div>
    </div>
</div>

<div class="modal" id="edit_pro1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">แก้ไข</h4>
            </div>
               <form action="Profile_save.php" method="post">
                <div class="modal-body">
                        <input hidden="hidden" name="id" id="id" value="">
                    <!-- <label>ชื่อ<label>
                        <input class="form-control" type="text" id="fname" name="fname" value="<?php //echo $result["users_firstname"]; ?>"/> -->
                    <label>คำนำหน้า</label>
                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $result["title"]; ?>"/>
                    <label>ชื่่อ</label>
                        <input class="form-control" type="text" id="fname" name="fname" value="<?php echo $result["users_firstname"]; ?>"/>
                    <label>สกุล</label>
                        <input class="form-control" type="text" id="lname" name="lname" value="<?php echo $result["users_lastname"]; ?>"/>
                    <label>อีเมล</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?php echo $result["email"]; ?>"/>
                    <label>โทรศัพท์</label>
                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $result["phone"]; ?>"/>        
            	</div>
            	<div class="modal-footer">
                 	<input type="submit" class="form-control btn btn-save" id="submit" name="submit" value="แก้ไข">
                 	<button class="btn btn-update" id="submit" name="submit" data-dismiss="modal">ปิด</button> 
            	</div>
             </form>
        </div>
    </div>
</div>
 <div id="wrapper" style="margin-top: 50px;">
        <!-- Navigation -->
        <div id="page-wrapper">

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row" >
                    <div class="col-lg-12">
                        <h2>ประวัติส่วนตัว</h2>
                    </div>
                </div>
               		


<?php
  	if($result["users_type"] == "USER"){

	$sql = "SELECT * FROM users";
	$query = mysqli_query($conn,$sql);
	?>
<div class="container-fluid" style="background-color: #FCFCFC; border: #846F00 solid 1px; border-radius: 0 0 20px 20px;">
</div>
<div class="container-fluid" style="text-align: left; padding-bottom: 10px; background-color: #EEF4FF; border-bottom: #846F00 solid 2px;">
<div class="row">
	<div class="col-lg-6">
	<?php
	while($result_pro=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		if($result["users_id"] == $result_pro["users_id"]){
			?>
			<table class="table" style="max-width: 500px; font-size: 25px;">
			<tr>
				<td width="150" style="text-align: right; padding-right: 20px;">
					<?php echo "ชื่อ-สกุล : "?>
				</td>
				<td style="color: green;">
					<?php echo $result_pro["title"]." ".$result_pro["users_firstname"]." ".$result_pro["users_lastname"]."<br>"?>
				</td>
			</tr>
			<tr>
				<td width="150" style="text-align: right; padding-right: 20px;">
					<?php echo "อีเมล : "?>
				</td>
				<td style="color: green;">
					<?php echo $result_pro["email"];?>
				</td>
			</tr>
			<tr>
				<td width="150" style="text-align: right; padding-right: 20px;">
					<?php echo "โทรศัพท์ : "?>
				</td>
				<td style="color: green;">
					<?php echo $result_pro["phone"]?>
				</td>
			</tr>
			</table>
			<center>
				<button class="btn btn-save edit_pro" name="edit" id="edit" href="#edit_pro1" data-toggle="modal" 
					data-id="<?php echo $result["users_id"];?>"
					data-title="<?php echo $result["title"];?>"
					data-fname="<?php echo $result["users_firstname"];?>"
					data-lname="<?php echo $result["users_lastname"];?>"
					data-email="<?php echo $result["email"];?>"
					data-phone="<?php echo $result["phone"];?>">แก้ไข</button>
			<!-- <a href="Profile_edit.php?users_id=<?php //echo $result["users_id"];?>">แก้ไขประวัติส่วนตัว</a> -->
			</center>
	</form>
	</div>
	<div class="col-lg-6">
	<form name="formUser" method="post">
			<table class="table" style="max-width: 500px; font-size: 25px;">
			<tr>
				<td width="150" style="text-align: right; padding-right: 20px;">
					<?php echo "ชื่อผู้ใช้ : "?>
				</td>
				<td style="color: green;">
					<?php echo $result["users_username"];?>
				</td>
			</tr>
			<tr>
				<td width="150" style="text-align: right; padding-right: 20px;">
					<?php echo "รหัสผ่าน : "?>
				</td>
				<td style="color: green;">
					<?php 

						$nub = strlen($result["users_password"]);
						// echo $nub;
						for($i=0;$i<$nub;$i++)
						{
							echo "<i class='fa fa-circle'></i> ";
						}
						?>
				</td>
			</tr>
			</table>
			<center>
				<!-- <button class="btn btn-save edit" name="edit" id="edit" href="#edit_c1" data-target="#edit_c1" data-toggle="modal" data-id="<?php echo $result["opt_c1_id"];?>" data-desc="<?php echo $result["opt_c1_desc"];?>">แก้ไข</button> -->
			<!-- <a href="Profile_edit.php?users_id=<?php echo $result["users_id"];?>">แก้ไขผู้ใช้</a></center> -->
			<!-- <a href="view_board.php?users_username=<?php //echo $result["users_username"];?>">Post</a> -->
			</form>
		</div>
	</div>
</div>
	<?php
		}
	}?>

<div class="container-fluid" style="text-align: left;  padding: 20px 0 20px 0; background-color: red; border-bottom: #846F00 solid 2px;">
	<div class="row">
		<div class="col-lg-12">
		 <div class="row" >
                    <div class="col-lg-12">
                        <h2>กระทู้ที่เป็นเจ้าของ</h2>
                    </div>
                </div>
				<center><table class="table" style="max-width: 1000px;">
                <thead>
                <tr  style="text-align: center; font-size: 20px; background-color: #fbc52c;">
		            <th style="max-width: 50px; border-radius: 20px 0 0 0;">
		            ลำดับ</th>
		            <th style="max-width: 400px; text-align: center;">
		            หัวข้อกระทู้</th>
		            <th style="max-width: 80px;text-align: center;" >
		            อ่าน</th>
		            <th style="max-width: 80px;text-align: center;">
		            ตอบ</th>
		            <th style="max-width: 80px;text-align: center; border-radius: 0 20px 0 0;">
		            วันที่ตั้งกระทู้
		            </th>
		            </tr>
		         </thead>
		         <tbody>
 <?php 
			$sql = "SELECT * FROM questions WHERE questions.name = '".$result["users_username"]."'";
			$query = mysqli_query($conn,$sql);
			while($post=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		$i=1;
		if($post["name"] !== null){
		 ?>

		           <tr style="text-align: center; background-color: #fff;">
		           	<td style="max-width: 50px;"><?php echo $i; ?></td>
		            <td style="max-width: 400px;"><a href="./fontend/webboard/view_topic.php?id=<?php echo $post['id']; ?>"><?php echo $post['topic']; ?></a></td>
		            <td style="max-width: 80px;"><?php echo $post['view']; ?></td>
		           	<td style="max-width: 80px;"><?php echo $post['reply']; ?></td>
		           	<td style="max-width: 80px;"><?php echo $post['created']; ?></td>
		           </tr>
		 <?php 
			}else{	
		?>
				<tr style="text-align: center; background-color: #fff;">
		           	<td colspan="5">ไม่มีกระทู้</td>
		        </tr>
		 <?php
				}		
		 }?>


 </tbody>
 </table></center>


		</div>
	</div>
</div>

<div class="container-fluid" style="text-align: left;  padding: 20px 0 20px 0; background-color: red; border-bottom: #846F00 solid 2px;">
	<div class="row">
		<div class="col-lg-12">
		 <div class="row" >
                    <div class="col-lg-12">
                        <h2>ตารางนัดหมอ</h2>
                    </div>
                </div>
				<center>
				<table class="table" style="max-width: 1000px;">
                <thead>
                <tr  style="text-align: center; font-size: 20px; background-color: #fbc52c;">
		            <th style="max-width: 50px; border-radius: 20px 0 0 0;">
		            ลำดับ</th>
		            <th style="max-width: 400px; text-align: center;">
		            วัน/เวลา</th>
		            <th style="max-width: 80px; text-align: center;" >
		            ชื่อหมอ</th>
		            <th style="max-width: 80px; border-radius: 0 20px 0 0; text-align: center;">
		            ยกเลิก
		            </th>
		            </tr>
		         </thead>
		         <tbody>
 <?php 
			$sql = "SELECT * FROM doctor_freetime,doctor WHERE doctor.doct_id = doctor_freetime.doct_id AND doctor_freetime.users_q = '".$result["users_username"]."'";
			$query = mysqli_query($conn,$sql);
			while($meet=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		// echo $meet["users_q"];
		$i=1;
		if($meet["users_q"] !== null){
		 ?>

		           <tr style="text-align: center; background-color: #fff;">
		           	<td style="max-width: 50px;"><?php echo $i; ?></td>
		            <td style="max-width: 400px;"><?php echo $meet['doct_freetime']; ?></a></td>
		            <td style="max-width: 80px;"><?php echo $meet['title']." ".$meet['users_firstname']." ".$meet['users_lastname']; ?></td>
		           	<td style="max-width: 80px;">
		           		<div align="center" onclick="return confirm('Are you sure?')">
		           		<a  href="deleteq3.php?ID=<?=$meet['id']?>&User_Q=<?=$result['users_q']?>">
		           		<?php echo "<i class='fa fa-times-circle' style='color:red;' ></i>" ?></a>
		           		</div>
		           	</td>
		           </tr>
		 <?php 
			}else{	
		?>
				<tr style="text-align: center; background-color: #fff;">
		           	<td colspan="5">ไม่มีกระทู้</td>
		        </tr>
		 <?php
				}		
		 }?>


 </tbody>
 </table></center>


		</div>
	</div>
</div>
	<?php
}
?>
</form>


</body>
</html>