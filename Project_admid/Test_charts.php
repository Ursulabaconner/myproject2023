<?php

include "connect.php";
// สร้างคำสั่ง SQL เพื่อดึงข้อมูล
$strSQL = "SELECT * FROM produt_type order by pt_id desc ";
$objQuery = mysqli_query($c,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
							
$strSQL1 = "SELECT * FROM order_qty group by od_id = $objResult['pt_id']";
$objQuery1 = mysqli_query($c,$strSQL1);
$objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
							
/*$strSQL2 = "SELECT * FROM order_state group by total_price";
$objQuery2 = mysqli_query($c,$strSQL2);
$objResult3 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
							
$SumTotal = 0;
while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
	{
		$Total = $objResult2['total_price'];
		$SumTotal = $SumTotal + $Total;
		
	}
/*$sql = "SELECT category, value FROM produt_type"; // เปลี่ยน 'your_table' เป็นชื่อตารางของคุณ
$result = $c->query($sql);
// ตรวจสอบการดึงข้อมูล
if ($result->num_rows > 0) {
    // รับข้อมูลในรูปแบบของอาร์เรย์และเพิ่มลงใน $dataPoints
	
    $dataPoints = array();
    while ($row = $result->fetch_assoc()) {
        $dataPoints[] = array("label" => $row['pt_id'], "y" => $row['pt_name']);
    }
} else {
    echo "ไม่พบข้อมูล";
}*/


/*$dataPoints = array(
	array("label"=> "Food + Drinks", "y"=> 590),
	array("label"=> "Activities and Entertainments", "y"=> 261),
	array("label"=> "Health and Fitness", "y"=> 158),
	array("label"=> "Shopping & Misc", "y"=> 72),
	array("label"=> "Transportation", "y"=> 191),
	array("label"=> "Rent", "y"=> 573),
	array("label"=> "Travel Insurance", "y"=> 126)
);*/
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expense Per Day  in Thai Baht"
	},
	subtitles: [{
		text: "Currency Used: Thai Baht (฿)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                  