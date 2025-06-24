<?php
	include_once('../controllers/connection.php');
	$obj=new Connection;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Question Paper Format  </title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}

		body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 20px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
		body .no-break {
			page-break-inside: avoid;
		}

		header {
			margin-top: 20px;
			margin-bottom: 50px;
		}
		header figure {
			float: left;
			width: 150px;
			height: 150px;
			margin-right: 10px;
			background-color: #8BC34A;
			border-radius: 50%;
			text-align: center;
		}
		header figure img {
			margin-top: 13px;
		}
		header .company-address {
			/*float: left;*/
			margin-left:25%;
			margin-right: 25%;
			max-width: 150px;
			line-height: 1.7em;
		}
		header .company-address .title {
			color: #8BC34A;
			font-weight: 400;
			font-size: 1.5em;
			text-transform: uppercase;
		}
		header .company-contact {
			float: right;
			height: 90px;
			padding: 0 10px;
			background-color: #8BC34A;
			color: white;
		}
		header .company-contact span {
			display: inline-block;
			vertical-align: middle;
		}
		header .company-contact .circle {
			width: 20px;
			height: 20px;
			background-color: white;
			border-radius: 50%;
			text-align: center;
		}
		header .company-contact .circle img {
			vertical-align: middle;
		}
		header .company-contact .phone {
			height: 100%;
			margin-right: 20px;
		}
		header .company-contact .email {
			height: 100%;
			min-width: 100px;
			text-align: right;
		}

		section .details {
			margin-bottom: 55px;
		}
		section .details .client {
			width: 50%;
			line-height: 20px;
		}
		section .details .client .name {
			color: #8BC34A;
		}
		section .details .data {
			width: 50%;
			text-align: right;
		}
		section .details .title {
			margin-bottom: 15px;
			color: #8BC34A;
			font-size: 9em;
			font-weight: 500;
			text-transform: uppercase;
		}
		section table {
			width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: 1.00em;
			/*font-size: 0.9166em;*/
		}
		section table .qty, section table .unit, section table .total {
			width: 80%;
		}
		section table .desc {
			width: 80%;
		}
		section table thead {
			display: table-header-group;
			vertical-align: middle;
			border-color: inherit;
		}
		section table thead th {
			padding: 5px 10px;
			background: #8BC34A;
			border-bottom: 5px solid #FFFFFF;
			border-right: 4px solid #FFFFFF;
			text-align: right;
			color: white;
			font-weight: 400;
			text-transform: uppercase;
		}
		section table thead th:last-child {
			border-right: none;
		}
		section table thead .desc {
			text-align: center;
		}
		section table thead .qty {
			text-align: center;
		}
		section table tbody td {
			padding: 10px;
			background: #E8F3DB;
			color: #777777;
			text-align: right;
			border-bottom: 5px solid #FFFFFF;
			border-right: 4px solid #E8F3DB;
		}
		section table tbody td:last-child {
			border-right: none;
		}
		section table tbody h3 {
			margin-bottom: 5px;
			color: #8BC34A;
			font-weight: 600;
		}
		section table tbody .desc {
			text-align: left;
		}
		section table tbody .qty {
			text-align: center;
		}
		section table.grand-total {
			margin-bottom: 45px;
		}
		section table.grand-total td {
			padding: 5px 10px;
			border: none;
			color: #777777;
			text-align: right;
		}
		section table.grand-total .desc {
			background-color: transparent;
		}
		section table.grand-total tr:last-child td {
			font-weight: 600;
			color: #8BC34A;
			font-size: 1.18181818181818em;
		}

		footer {
			margin-bottom: 0px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #8BC34A;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #8BC34A;
			text-align: center;
		}
	</style>
</head>

<body>
	<header class="clearfix">
		<div class="container">
			<figure>
				<br><br><br>
				<img class="logo" src="data:image/png;base64,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" alt="">
			</figure>
                     <div class="company-contact">
				<div class="phone left"><br><br>
					Name:__________________________<br><br>                
					Signature:_____________________<br><br>
						<br> </div>
						 </div>
			<center>
				
				<h2 style="font-size: 20px; font-weight: bold; text-transform: uppercase;"><?=$_POST['cname']?><br></h2>
				
				<p style="font-size: 15px; font-weight: 200;">
					<?=$_POST['ename']?></br><?=$_POST['dept']?><br><?=$_POST['course_code']?>-
					<?php
	               	$id=$_POST['subject'];
					$table_name='subject';
					$field_name='subject_name';
					$condition="sub_id=".$id;
					$row=$obj->getNameByID($table_name,$field_name,$condition);
					?>
				</p>

			</center>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="details clearfix">
				<div class="client left"><br>
					<p>Question Paper Code:<?=$_POST['qp_code']?></p>
					<!--<p class="name">Subject:</p>
					<p>796 Silver Harbour, TX 79273, US</p>
					<a href="mailto:john@example.com">john@example.com</a>-->
				</div>
				<div class="data right">
					<div class="title"></div>
					<!--<div class="date">class="name"-->
						<p>Total Mark:<?=$_POST['total_mark']?></p>
						<p >Duration:<?=$_POST['time_exam']?></p>
					<!--</div>-->
				</div>
			</div>

			<table id="example2" border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="desc">Part A<br>Answer any <?php $ida=$_POST['part_a'];echo $ida-=2; ?> questions. Each question carries 2 martks </th>
						<!--<th class="qty">Quantity</th>-->
						<!--<th class="unit">Unit price</th>-->
						<th class="total">(<?=$ida?>x2=<?php echo $ida*2;?>)</th>
					</tr>
				</thead>
				<tbody>
					<?php
					error_reporting(0);
						$limitA=$_POST['part_a'];
						$sub=$_POST['subject'];
					$module=$_POST['mod_1'];
					$module2=$_POST['mod_2'];
					$module3=$_POST['mod_3'];
					$module4=$_POST['mod_4'];
					$module5=$_POST['mod_5'];
					echo $limitA; 
						
switch ($module) {
		case $module:
        $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub AND `module`=$module  ORDER BY RAND() LIMIT $limitA");
        break;
    case $module and $module2:
        $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub AND (module = $module or module =  $module2)  ORDER BY RAND() LIMIT $limitA");
        break;
    case $module and $module2 and $module3:
        $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub AND (module = $module or module =  $module2 or module = $module3 ) ORDER BY RAND() LIMIT $limitA");
        break;
    case $module and $module2 and $module3 and $module4:
       $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub AND (module = $module or module =  $module2 or module = $module3 or module =  $module4)  ORDER BY RAND() LIMIT $limitA");
        break;
		 case $module and $module2 and $module3 and $module4 and $module5:
       $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub AND (module = $module or module =  $module2 or module = $module3 or module =  $module4 OR module = $module5)  ORDER BY RAND() LIMIT $limitA");
        break;
    default:
       $partA=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='2' AND `sub_id`=$sub  ORDER BY RAND() LIMIT $limitA");
}

					
						$i=1;
						foreach($partA as $valueA)
						{
					?>
					<tr>
						<td class="desc"><?=$i;?>.<?=$valueA['question'];?></td>
						<td></td>
					</tr>					
					<?php
						$i++;
						}
					?>
					</tbody>
			</table>
			<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="desc">Part B<br>Answer any <?php $idb=$_POST['part_b'];echo $idb-=3;?> questions. Each question carries 5 martks </th>
						<!--<th class="qty">Quantity</th>-->
						<!--<th class="unit">Unit price</th>-->
						<th class="total">(<?=$idb?>x5=<?php echo $idb*5;?>)</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$limitB=$_POST['part_b'];
						$sub=$_POST['subject'];					
						$partB=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='5' AND `sub_id`=$sub ORDER BY RAND() LIMIT $limitB");
						$i=$limitA;
					
						foreach($partB as $valueB)
						{
					?>
					<tr>
						<td class="desc"><?=$i;?>.<?=$valueB['question'];?></td>
						<td></td>
					</tr>					
					<?php
						$i++;
						}
					?>					
				</tbody>
			</table>
			<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="desc">Part C<br>Answer any <?php $idc=$_POST['part_c'];echo $idc-=2;?> questions. Each question carries 15 martks </th>
						<!--<th class="qty">Quantity</th>-->
						<!--<th class="unit">Unit price</th>-->
						<th class="total">(<?=$idc?>x15=<?php echo $idc*15;?>)</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$limitC=$_POST['part_c'];
						$sub=$_POST['subject'];					
						$partC=$obj->getAll("SELECT * FROM `question` WHERE `question_type`='15' AND `sub_id`=$sub ORDER BY RAND() LIMIT $limitC");
						$i=$limitB+$limitB+1;
						foreach($partC as $valueC)
						{
					?>
					<tr>
						<td class="desc"><?=$i;?>.<?=$valueC['question'];?></td>
						<td></td>
					</tr>					
					<?php
						$i++;
						}
					?>
				</tbody>
			</table>
			
		</div>
	</section>

	<footer>
		<div class="container">
			<!--<div class="thanks">Thank you!</div>-->
			<div class="notice">
				<div></div>
				<div></div>
			</div>
			<div class="end">
				<div class="container">Question Paper Created by <div class="thanks">EasyExam</div></div>
		</div>
	</footer>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>


<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>



</body>

</html>
