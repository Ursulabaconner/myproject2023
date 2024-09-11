<html lang="en">
<head>
</head>
<body>
<?php
 ini_set('display_errors', 1);
 error_reporting(~0);
 $strKeyword = null;
 if(isset($_POST["txtKeyword"]))
 {
	 $strKeyword = $_POST["txtKeyword"];
 }
 ?>
 <form name="frmSearch" class="form-header" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post" >
	 <input class="au-input au-input--xl" type="text" name="txtKeyword" id="txtKeyword" placeholder="Search for datas &amp; reports..." value="<?php echo $strKeyword?>" />
	 <button class="au-btn--submit" type="submit">
	 <i class="zmdi zmdi-search">Search</i>
	 </button>
 </form>
 <?php
	include "connect.php";
	$strSQL = "SELECT * FROM productmaster WHERE pm_name LIKE '%".$strKeyword."%'";
	$objQuery = mysqli_query($c,$strSQL);
	$result = $c->query($strSQL);
	$number=$result->num_rows;
	$no=1;
	if(!$objQuery)
	{
		echo $c->error;
		exit();
	}
	
 ?>
 <table class="table table-borderless table-striped table-earning">
	<thead>
		<tr>
			<th class="text-right">number</th>
			<th class="text-right">ProductID</th>
			<th class="text-right">ProductName</th>
			<th class="text-right">Detail</th>
			<th class="text-right">Quantity</th>
			<th class="text-right">Time</th>
			<th class="text-right">Price</th>
			<th class="text-right">Size</th>
			<th class="text-right">Type</th>
			<th class="text-right">Picture</th>
													
		</tr>
 <?php
 if($number<>0) {
	 while($rs=mysqli_fetch_array($objQuery,MYSQLI_ASSOC)) {
		 $id_pro=$rs["pm_id"];
		 $code_pro=sprintf("%05d",$id_pro);	
		 $name_pro=$rs["pm_name"];
		 $ref_id_type=$rs["pm_type"];
		 $detail_pro=$rs["pm_detail"];
		 $qty_pro=$rs["pm_qty"];
		 $time_pro=$rs["pm_time"];
		 $price_pro=$rs["pm_price"];
		 $size_pro=$rs["pm_size"];
		 $photo_pro=$rs["pm_img"];
		 $sql2="select pt_name from produt_type where pt_id='$ref_id_type' ";
		 $result2=$c->query($sql2);
		 $rs2=$result2->fetch_assoc();
		 $name_type=$rs2["pt_name"];
 ?>
		<tr>
			<td><center><?=$no ?></center></td>
			 <td><?=$code_pro ?></td>
			 <td><?=$name_pro ?></td>
			 <td><?=$detail_pro ?></td>
			 <td><?=$qty_pro ?></td>
			 <td><?=$time_pro ?></td>
			 <td><?=$price_pro?></td>
			 <td><?=$size_pro ?></td>
			 <td><?=$name_type ?></td>		
			 <!--<td><img src="<?=$photo_pro ?>"></td>-->
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</thead>
</table>
<?php 
$c->close();
 
?>
</body>
</html>
