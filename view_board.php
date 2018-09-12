<?php
include("config.php");


   $strName = null;

   if(isset($_GET["users_username"]))
   {
   	$strName = $_GET["users_username"];
   }

$sql = "SELECT * FROM questions WHERE name = '".$_GET["users_username"]."' ORDER BY id DESC ";
$query = mysqli_query($conn,$sql);

?>
  
<section id="intro"  style="background-color: #eee;">
    <div class="container" style="font-size: 22px;">
        <div class="row" >
            <div class="col-md-12">
            <div class="row  pad-row">
				<div class="col-md-12 col-sm-12 ">
						  <div class="row pad-row">
							<div class="col-md-12 col-sm-12" style="font-size: 40px; color:brown;">
							กระดานกระทู้
							</div>
							</div>
							<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-12">
							<a href="new_topic.php" ><i class="fa fa-post"></i>ตั้งกระทู้</a>
							</div>
							</div>
                <div class="container">
                <div class="row">

                <table border="0" cellpadding="0" cellspacing="0" align="center" class="table">
                <thead>
                <tr>
		            <th width="5%" style="text-align: center; font-size: 25px;background-color: #fbc52c; border-radius: 20px 0 0 0;">
		            ลำดับ</th>
		            <th width="55%" style="text-align: center; font-size: 25px;background-color: #fbc52c;">
		            หัวข้อกระทู้</th>
		            <th width="10%" style="text-align: center; font-size: 25px;background-color: #fbc52c;" >
		            อ่าน</th>
		            <th width="10%" style="text-align: center; font-size: 25px;background-color: #fbc52c;" >
		            ตอบ</th>
		            <th width="20%" style="text-align: center; font-size: 25px;background-color: #fbc52c; border-radius: 0 20px 0 0;">
		            วันที่ตั้งกระทู้
		            </th>
		            </tr>
		         </thead>
		         <tbody>
 <?php
 if($query != null){
 $i = 1;
 while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 ?>

		           <tr>
		           	<td width="5%" style="text-align: center; background-color: #fff;"><?php echo $i; ?></td>
		            <td width="55%" style="text-align: left; background-color: #fff;"><a href="view_topic.php?id=<?php echo $result['id']; ?>"><?php echo $result['topic']; ?></a></td>
		            <td width="10%" style="text-align: center; background-color: #fff;"><?php echo $result['view']; ?></td>
		           	<td width="10%" style="text-align: center; background-color: #fff;"><?php echo $result['reply']; ?></td>
		           	<td width="20%" style="text-align: center; background-color: #fff;"><?php echo $result['created']; ?></td>
		           </tr>
		 

 <?php
 $i++;
 }
 ?>
 </tbody>
 </table>
 <?
}else{
	?>
			<div class="container">
                <div class="row" style="border-bottom: #eee solid 2px;">
		            <div class="col-sm-12" style="text-align: center;" >ไม่มีกระทู้</div>
		         </div>
            </div>
	<?php
}
 ?>
                     	</div>
                      
                 	</div>
                
            	</div>
               
   			</div>
        </div>
        </section>

<?php
mysqli_close($conn);
?>
