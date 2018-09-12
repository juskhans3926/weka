<html>
<head>
<!-- start script -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body>
<?php

$date_0 = date('Y-m-d', strtotime("+0 days"));
$date_14 = date('Y-m-d', strtotime("+14 days")); 

?>
<span id="startDate"><?php echo $date_0;?></span> 
<b>ถึงวันที่ </b>
<span id="endDate"><?php echo $date_14;?></span> 

<script type="text/javascript">

$(function(){
  var minD = $("#startDate").html();
  var maxD = $("#endDate").html();
  $("#dateInput").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: new Date(minD),
    maxDate: new Date(maxD)
  });
});

function  checkNumber(elm){
 if(!elm.value.match(/^\d+$/)){
    alert('กรอกตัวเลขเท่านั้น');
    elm.value='';

 }
}

</script>



<form>
<input type="text" name="dateInput" id="dateInput" value="" onselect="showQueue(this.value)"/> 

<!-- <select name="date" >
  <option value="">Select a person:</option>
  <option value="2016-12-15">2016-12-15</option>
  <option value="2016-12-14">2016-12-14</option>
  <option value="2016-12-13">2016-12-13</option>
  <option value="2016-12-17">2016-12-17</option>
  </select> -->
</form>
<br>
<div id="txtHint"></div>


กรอก ตัวเลขเท่านั้น :<input type='text' onkeyup='checkNumber(this)'/>

</body>
</html>