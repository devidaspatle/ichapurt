<?php 
include "header.php";
error_reporting(0);
include("classess/etsystem.php");

$crud = new Etstysem();
$query11 = "SELECT * FROM tbl_jodi_chart WHERE  mattka_type ='ICHNIG8787'  order by id asc";
$results11 = $crud->getData($query11);
 
?>
<style>.col-sm-12,.col-md-12,.col-xs-12{padding-right:0;padding-left:0}.chart-11,.chart-22,.chart-33,.chart-44,.chart-55,.chart-66,.chart-77,.chart-88,.chart-99,.chart-00,.chat-05,.chat-50,.chat-16,.chat-61,.chat-27,.chat-72,.chat-38,.chat-83,.chat-49,.chat-94{color:red!important}.dotted-border{border:1px dotted #000;width:100px;padding:0 5px 0 5px;margin-top:2px}.bg-color{background:#ff0}.logo{padding-top:0;color:#fff!important;border-radius:38px}.satta-matka-block_strtF{background-color:#140075;border-radius:5px;font-size:19px;padding:10px;text-align:center;border:#fff solid 2px;font-style:italic;font-family:Montserrat,sans-serif;margin-top:10px;margin-bottom:10px;font-weight:bold;color:#fff}@media (max-width:767px){.panel-chart.chart-table tbody tr td:first-child{display:none}.panel-chart.chart-table thead tr th:first-child{display:none}.panel-chart.chart-table h2{font-size:26px}.logo{width:100%}}</style><style>.bg-grey{background:#e1e1e1!important}.panel{font-family:Comic\ Sans\ MS;font-style:italic;font-weight:700;border-color:#fa950e}.panel-body{padding:0}.panel-heading{background:#3f51b5!important;color:#fff!important}@media (max-width:480px){.panel-chart h3{font-size:8px;padding:0;margin:0}.panel-chart h2,p{font-size:10px;font-weight:bold;padding:0;margin:0}table th{font-size:11px;font-weight:bold}}table,td,th{border:1px solid #666}table,td,th{border:1px solid #666}.panel-chart.chart-table td{padding:5px 2px 5px 2px}.panel-chart.chart-table p{text-shadow:none}.chart-bold{font-size:12px}.chart-11,.chart-22,.chart-33,.chart-44,.chart-55,.chart-66,.chart-77,.chart-88,.chart-99,.chart-00,.chart-05,.chart-50,.chart-16,.chart-61,.chart-27,.chart-72,.chart-38,.chart-83,.chart-49,.chart-94,.chart-**{color:red!important}.panel{background-color:#fff0}body{background-color:#fc9}html{overflow-x:hidden}body{background:url(img/slider_section.jpg);overflow-x:hidden;padding:0;margin:0;font-family:sans-serif;font-style:normal!important}table,td,th{border:1px solid #000!important}.top-header{text-align:center}.container-fluid{justify-content:center;display:flex;width:100%;margin-right:auto!important;margin-left:auto!important}.B1{border:3px solid #ff006c!important;border-radius:10px 0 0 0!important;margin:1px auto;padding:3px 2px!important}.button2{ background:#b4083d;
  border: none;
  color: #f5eabd;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius:5px;
  border: #fa950e 1px solid;
font-weight: 800;}.button2:hover{box-shadow:0 8px 10px 0 rgba(0,0,0,.5) , 0 6px 8px 0 rgba(0,0,0,.3)!important;color:#f5eabd!important;text-shadow:0 0 0 #000!important;text-decoration:none!important}.col-lg-8.col-lg-offset-2{width:60%;margin-left:auto;margin-right:auto;padding-left:15px!important;padding-right:15px!important}.chart-table{width:100%;text-align:center}.panel{font-weight:700;border:1px solid #fa950e}.panel-heading{}.panel-heading h5{background-color:#03a9f4;text-align:center;padding:12px 10px;font-size:24px!important;color:#fff!important;text-shadow:1px 1px 3px #232323!important;font-weight:600;letter-spacing:1px;margin:0;font-family:sans-serif;font-style:normal!important}thead tr{background-color:#ffc107!important;color:#000;text-shadow:1px 1px 2px #9a7400ab;font-style:normal!important;font-family:sans-serif}.panel-body{padding:0}.chart-11,.chart-22,.chart-33,.chart-44,.chart-55,.chart-66,.chart-77,.chart-88,.chart-99,.chart-00,.chart-05,.chart-50,.chart-16,.chart-61,.chart-27,.chart-72,.chart-38,.chart-83,.chart-49,.chart-94,.chart-**{color:red!important}tbody td{text-shadow:1px 1px 2px #ff7d54c7;font-style:normal;font-family:sans-serif}.panel-info>.panel-heading{padding:0}.panel-chart.chart-table td{padding:5px 2px 5px 2px}.panel-chart.chart-table td h2{font-weight:700!important;margin-top:6px;margin-bottom:5px;font-size:32px}.panel-chart.chart-table td h2{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-weight:700!important}div[align*="center"]>div{background-color:#fff!important;color:red!important;font-weight:bold!important;font-size:25px!important;text-decoration:none!important;border:4px groove purple!important;border-radius:10px 0 0 0!important;text-shadow:1px 1px gold!important;text-align:center!important}div[align*="center"]>div hr{border-top:2px solid #b2ddff;margin:6px 0 10px}div[align*="center"]>div b font a{font-size:35px;text-transform:uppercase;font-weight:600}div[align*="center"]>div a{color:#007bff!important}div[align*="center"]>div b>span{color:red!important;font-size:25px;font-weight:600}.panel-chart.chart-table tbody tr td:first-child{font-size:16px}@media (max-width:768px){.container-fluid{display:block;width:100%}.col-lg-8.col-lg-offset-2{width:75%}.panel-chart.chart-table td h2{font-weight:700!important}}@media (max-height:768px) and (orientation:landscape){.col-lg-8.col-lg-offset-2{width:40%}.panel-chart.chart-table thead th:first-child,.panel-chart.chart-table tbody tr td:first-child{display:none}.panel-chart.chart-table td h2{font-size:28px;font-weight:700!important}}@media only screen and (max-height:640px) and (orientation:landscape){.panel-chart.chart-table thead th:first-child,.panel-chart.chart-table tbody tr td:first-child{display:none}.col-lg-8.col-lg-offset-2{width:50%}th{font-size:12px}.panel-chart.chart-table td h2{font-size:24px}.panel-chart.chart-table td h2{font-weight:700!important}.col-lg-8.col-lg-offset-2{width:42%}}@media (max-width:500px) and (orientation:portrait){.panel-chart.chart-table thead th:first-child,.panel-chart.chart-table tbody tr td:first-child{display:none}.col-lg-8.col-lg-offset-2{width:100%}.panel-chart.chart-table td h2{font-weight:700!important}.B1{margin-left:5px;margin-right:5px}.container-fluid{padding-left:0;padding-right:0}h2{font-size:26px}table th{font-size:11px;font-weight:bold}div[align*="center"]>div a{font-size:16px;margin-top:10px}div[align*="center"]>div b font a{font-size:25px}div[align*="center"]>div b>span{font-size:14px}div[align*="center"]>div b>span br{display:block;margin-bottom:-20px;content:""}.col-lg-8.col-lg-offset-2{padding-left:0!important;padding-right:0!important}.panel-chart.chart-table td h2{font-weight:700!important;margin-top:-3px;margin-bottom:-3px;font-size:28px}.panel{margin:0 1px}}.button2{cursor:pointer}</style></head>

<center>
<div id="top"></div>
<a onClick="if (!window.__cfRLUnblockHandlers) return false; gotob()" class="button2" data-cf-modified-24b2f24998667de8334fcb57-=""> Go to Bottom </a>
</center>

<div class="container-fluid">
<div class="col-lg-8 col-lg-offset-2" style="padding-right: 0px; padding-left: 0px;">


<div class="panel-body">
<div class="panel panel-info">
<div class="panel-heading text-center" style="background: #3f51b5;"><h1 style="font-size: 22px;color:#fff; text-shadow: 0px 0px;">ICHAAPURTI DAY JODI CHART</h1></div>
<div class="panel-body">
<table style="width: 100%; text-align:center;" class="panel-chart chart-table" cellpadding="2">
<thead>
<tr>
<th>#</th>    
<th style="font-size:20px;">Mon</th>
<th style="font-size:20px;">Tue</th>
<th style="font-size:20px;">Wed</th>
<th style="font-size:20px;">Thu</th>
<th style="font-size:20px;">Fri</th>
<!--<th>Sat</th>-->
</tr>
</thead>
<tbody>
<?php    
    foreach( $results11 as $key => $row11)
	{
?>
  <tr>
     <td>#</td>
    <td style="font-size:20px;"><?php echo 	$row11['mond'];?></td>
    <td style="font-size:20px;"><?php echo 	$row11['tuesd'];?></td>
    <td style="font-size:20px;"><?php echo 	$row11['wedn'];?></td>
    <td style="font-size:20px;"><?php echo 	$row11['thusd'];?></td>
    <td style="font-size:20px;"><?php echo 	$row11['frid'];?></td>
    <!--<td><?php //echo 	$row11['satus'];?></td>-->
  </tr>
 <?php } ?>
  </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="clear">&nbsp;</div>
</div>

<center>
<div id="bottom"></div>
<div id="bottom"></div>
<a class="button2" onClick="if (!window.__cfRLUnblockHandlers) return false; gotot()" data-cf-modified-88d5686927695105701d2f6d-=""> Go to Top </a>
<a class="button2" href="index.php"> Back to Home</a>
</center>
<div align="center">
<h4 class="pby-us" style="background:#fa950e;">Powered By Ichaapurti</h4>
<span style="color: purple;">All Rights Reseved&reg;<br />
(2022-2023)<br />
</font><font size="6" color="blue"></font></b></div>
</div>
</body>

</html>