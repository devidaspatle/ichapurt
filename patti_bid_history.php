<?php 
error_reporting(0);
session_start();
include "classess/check_session.php";
include("classess/etsystem.php");
$crud = new Etstysem();
$bidid =  $_GET['bidid'];
$catid = $_GET['catid'];
$date = $_GET['date'];
include "header.php";
//and created_at = now()
$queryss = "SELECT * FROM  tbl_patti  where 	customerId  ='".$tsoftId."' and category_name='".$catid."' and id='".$bidid."'";

$resultss = $crud->getData($queryss);
foreach ($resultss as $key => $row) { 	
  $category_name = $row['category_name'];	
  $akata230 = $row['akata230'];	
    $akata267 = $row['akata267'];	
    $akata348 = $row['akata348'];	
    $akata357 = $row['akata357'];	
    $akata456 = $row['akata456'];	
    $akata140 = $row['akata140'];	
    $akata137 = $row['akata137'];	
    $akata128 = $row['akata128'];	
    $akata146 = $row['akata146'];	
    $akata236 = $row['akata236'];	
    $akata245 = $row['akata245'];	
    $akata290 = $row['akata290'];	
    $akata380 = $row['akata380'];	
    $akata470 = $row['akata470'];	
    $akata489 = $row['akata489'];	
    $akata560 = $row['akata560'];	
    $akata678 = $row['akata678'];	
    $akata579 = $row['akata579'];	
    $akata119 = $row['akata119'];	
    $akata155 = $row['akata155'];	
    $akata227 = $row['akata227'];	
    $akata335 = $row['akata335'];	
    $akata344 = $row['akata344'];	
    $akata399 = $row['akata399'];	
    $akata588 = $row['akata588'];	
    $akata669 = $row['akata669'];	
    $akata777 = $row['akata777'];	
    $akata100 = $row['akata100'];	
    $akata129 = $row['akata129'];	
    $akata138 = $row['akata138'];	
    $akata147 = $row['akata147'];	
    $akata156 = $row['akata156'];	
    $akata237 = $row['akata237'];	
    $akata246 = $row['akata246'];	
    $akata345 = $row['akata345'];	
    $akata390 = $row['akata390'];	
    $akata480 = $row['akata480'];	
    $akata570 = $row['akata570'];	
    $akata589 = $row['akata589'];	
    $akata679 = $row['akata679'];	
    $akata110 = $row['akata110'];	
    $akata228 = $row['akata228'];	
    $akata255 = $row['akata255'];	
    $akata336 = $row['akata336'];	
    $akata499 = $row['akata499'];	
    $akata660 = $row['akata660'];	
    $akata688 = $row['akata688'];	
    $akata778 = $row['akata778'];	
    $akata200 = $row['akata200'];	
    $akata444 = $row['akata444'];	
    $akata120 = $row['akata120'];	
    $akata139 = $row['akata139'];	
    $akata148 = $row['akata148'];	
    $akata157 = $row['akata157'];	
    $akata238 = $row['akata238'];	
    $akata247 = $row['akata247'];	
    $akata256 = $row['akata256'];	
    $akata346 = $row['akata346'];	
    $akata490 = $row['akata490'];	
    $akata580 = $row['akata580'];	
    $akata670 = $row['akata670'];	
    $akata689 = $row['akata689'];	
    $akata166 = $row['akata166'];	
    $akata229 = $row['akata229'];	
    $akata337 = $row['akata337'];	
    $akata355 = $row['akata355'];	
    $akata445 = $row['akata445'];	
    $akata599 = $row['akata599'];	
    $akata779 = $row['akata779'];	
    $akata788 = $row['akata788'];	
    $akata300 = $row['akata300'];	
    $akata111 = $row['akata111'];	
    $akata130 = $row['akata130'];	
    $akata149 = $row['akata149'];	
    $akata158 = $row['akata158'];	
    $akata167 = $row['akata167'];	
    $akata239 = $row['akata239'];	
    $akata248 = $row['akata248'];	
    $akata257 = $row['akata257'];	
    $akata347 = $row['akata347'];	
    $akata356 = $row['akata356'];	
    $akata590 = $row['akata590'];	
    $akata680 = $row['akata680'];	
    $akata789 = $row['akata789'];	
    $akata112 = $row['akata112'];	
    $akata220 = $row['akata220'];	
    $akata266 = $row['akata266'];	
    $akata338 = $row['akata338'];	
    $akata446 = $row['akata446'];	
    $akata455 = $row['akata455'];	
    $akata699 = $row['akata699'];	
    $akata770 = $row['akata770'];	
    $akata400 = $row['akata400'];	
    $akata888 = $row['akata888'];	
    $akata159 = $row['akata159'];	
    $akata168 = $row['akata168'];	
    $akata249 = $row['akata249'];	
    $akata258 = $row['akata258'];	
    $akata690 = $row['akata690'];	
    $akata780 = $row['akata780'];	
    $akata113 = $row['akata113'];	
    $akata122 = $row['akata122'];	
    $akata177 = $row['akata177'];	
    $akata339 = $row['akata339'];	
    $akata366 = $row['akata366'];	
    $akata447 = $row['akata447'];	
    $akata799 = $row['akata799'];	
    $akata889 = $row['akata889'];	
    $akata500 = $row['akata500'];	
    $akata555 = $row['akata555'];	
    $akata123 = $row['akata123'];	
    $akata150 = $row['akata150'];	
    $akata169 = $row['akata169'];	
    $akata178 = $row['akata178'];	
    $akata240 = $row['akata240'];	
    $akata259 = $row['akata259'];	
    $akata268 = $row['akata268'];	
    $akata349 = $row['akata349'];	
    $akata358 = $row['akata358'];	
    $akata367 = $row['akata367'];	
    $akata457 = $row['akata457'];	
    $akata790 = $row['akata790'];	
    $akata114 = $row['akata114'];	
    $akata277 = $row['akata277'];	
    $akata330 = $row['akata330'];	
    $akata448 = $row['akata448'];	
    $akata466 = $row['akata466'];	
    $akata556 = $row['akata556'];	
    $akata880 = $row['akata880'];	
    $akata899 = $row['akata899'];	
    $akata600 = $row['akata600'];	
    $akata222 = $row['akata222'];	
    $akata124 = $row['akata124'];	
    $akata160 = $row['akata160'];	
    $akata179 = $row['akata179'];	
    $akata250 = $row['akata250'];	
    $akata269 = $row['akata269'];	
    $akata278 = $row['akata278'];	
    $akata340 = $row['akata340'];	
    $akata359 = $row['akata359'];	
    $akata368 = $row['akata368'];	
    $akata458 = $row['akata458'];	
    $akata467 = $row['akata467'];	
    $akata890 = $row['akata890'];	
    $akata115 = $row['akata115'];	
    $akata133 = $row['akata133'];	
    $akata188 = $row['akata188'];	
    $akata223 = $row['akata223'];	
    $akata377 = $row['akata377'];	
    $akata449 = $row['akata449'];	
    $akata557 = $row['akata557'];	
    $akata566 = $row['akata566'];	
    $akata700 = $row['akata700'];	
    $akata999 = $row['akata999'];	
    $akata125 = $row['akata125'];	
    $akata134 = $row['akata134'];	
    $akata170 = $row['akata170'];	
    $akata189 = $row['akata189'];	
    $akata260 = $row['akata260'];	
    $akata279 = $row['akata279'];	
    $akata350 = $row['akata350'];	
    $akata369 = $row['akata369'];	
    $akata378 = $row['akata378'];	
    $akata459 = $row['akata459'];	
    $akata468 = $row['akata468'];	
    $akata567 = $row['akata567'];	
    $akata116 = $row['akata116'];	
    $akata224 = $row['akata224'];	
    $akata233 = $row['akata233'];	
    $akata288 = $row['akata288'];	
    $akata440 = $row['akata440'];	
    $akata477 = $row['akata477'];	
    $akata558 = $row['akata558'];	
    $akata990 = $row['akata990'];	
    $akata800 = $row['akata800'];	
    $akata666 = $row['akata666'];	
    $akata126 = $row['akata126'];	
    $akata135 = $row['akata135'];	
    $akata180 = $row['akata180'];	
    $akata234 = $row['akata234'];	
    $akata270 = $row['akata270'];	
    $akata289 = $row['akata289'];	
    $akata360 = $row['akata360'];	
    $akata379 = $row['akata379'];	
    $akata450 = $row['akata450'];	
    $akata469 = $row['akata469'];	
    $akata478 = $row['akata478'];	
    $akata568 = $row['akata568'];	
    $akata117 = $row['akata117'];	
    $akata144 = $row['akata144'];	
    $akata199 = $row['akata199'];	
    $akata225 = $row['akata225'];	
    $akata388 = $row['akata388'];	
    $akata559 = $row['akata559'];	
    $akata577 = $row['akata577'];	
    $akata667 = $row['akata667'];	
    $akata900 = $row['akata900'];	
    $akata333 = $row['akata333'];	
    $akata127 = $row['akata127'];	
    $akata136 = $row['akata136'];	
    $akata145 = $row['akata145'];	
    $akata190 = $row['akata190'];	
    $akata235 = $row['akata235'];	
    $akata280 = $row['akata280'];	
    $akata370 = $row['akata370'];	
    $akata389 = $row['akata389'];	
    $akata460 = $row['akata460'];	
    $akata479 = $row['akata479'];	
    $akata569 = $row['akata569'];	
    $akata578 = $row['akata578'];	
    $akata118 = $row['akata118'];	
    $akata226 = $row['akata226'];	
    $akata244 = $row['akata244'];	
    $akata299 = $row['akata299'];	
    $akata334 = $row['akata334'];	
    $akata488 = $row['akata488'];	
    $akata668 = $row['akata668'];	
    $akata677 = $row['akata677'];	
    $akata000 = $row['akata000'];	
    $akata550 = $row['akata550'];
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <div class="container">

<div class="row" >
       <div class="col-md-12" >
        <div class="serviceBox">
            <h3 class="title">Patti</h3> 
               <section class="h-100 h-custom">
 
         
          <div class="card-body">
         
           

             <div class="row">
               
         
               <div class="col-md-12" style="padding: 20px;">
              <input type="hidden" name="mattaka_name" value="rajdhani-night-patti" class="form-control" value="<?php echo $akata137; ?>" disabled  />

               <input type="hidden" name="customer_id" value="<?php echo $_SESSION['tsoftId'];?>" />
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: center;"><h3> Patti Number</h3></td>
                     <td  style="text-align: right;">  <a href="bid_history.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                  </tr>

                   <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">1</td>
                  </tr>
                   <tr style="color: black">
                    <td>137</td>
                    <td>128</td>
                    <td>146</td>
                    <td>236</td>
                    <td>245</td>
                  </tr>
                   <tr><td><input type="Number" name="akata137" class="form-control" value="<?php echo $akata137; ?>" disabled /></td>
                    <td><input type="Number" name="akata128" class="form-control" value="<?php echo $akata128; ?>" disabled  /></td>
                    <td><input type="Number" name="akata146" class="form-control" value="<?php echo $akata146; ?>" disabled  /></td>
                    <td><input type="Number" name="akata236" class="form-control" value="<?php echo $akata236; ?>" disabled  /></td>
                    <td><input type="Number" name="akata245" class="form-control" value="<?php echo $akata245; ?>" disabled  /></td>
                  </tr>
                    <tr style="color: black">
                    <td>290</td>
                    <td>380</td>
                    <td>470</td>
                    <td>489</td>
                    <td>560</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata290" class="form-control" value="<?php echo $akata290; ?>" disabled  /></td>
                    <td><input type="Number" name="akata380" class="form-control" value="<?php echo $akata380; ?>" disabled  /></td>
                    <td><input type="Number" name="akata470" class="form-control" value="<?php echo $akata470; ?>" disabled  /></td>
                    <td><input type="Number" name="akata489" class="form-control" value="<?php echo $akata489; ?>" disabled  /></td>
                    <td><input type="Number" name="akata560" class="form-control" value="<?php echo $akata560; ?>" disabled  /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>678</td>
                    <td>579</td>
                    <td>119</td>
                    <td>155</td>
                    <td>227</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata678" class="form-control" value="<?php echo $akata678; ?>" disabled  /></td>
                    <td><input type="Number" name="akata579" class="form-control" value="<?php echo $akata579; ?>" disabled  /></td>
                    <td><input type="Number" name="akata119" class="form-control" value="<?php echo $akata119; ?>" disabled  /></td>
                    <td><input type="Number" name="akata155" class="form-control" value="<?php echo $akata155; ?>" disabled  /></td>
                    <td><input type="Number" name="akata227" class="form-control" value="<?php echo $akata227; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                     <td>335</td>
                    <td>344</td>
                    <td>399</td>
                    <td>588</td>
                    <td>669</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata335" class="form-control" value="<?php echo $akata335; ?>" disabled  /></td>
                    <td><input type="Number" name="akata344" class="form-control" value="<?php echo $akata344; ?>" disabled  /></td>
                    <td><input type="Number" name="akata399" class="form-control" value="<?php echo $akata399; ?>" disabled  /></td>
                    <td><input type="Number" name="akata588" class="form-control" value="<?php echo $akata588; ?>" disabled  /></td>
                    <td><input type="Number" name="akata669" class="form-control" value="<?php echo $akata669; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>777</td>
                    <td>100</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata777" class="form-control" value="<?php echo $akata777; ?>" disabled  /></td>
                    <td><input type="Number" name="akata100" class="form-control" value="<?php echo $akata100; ?>" disabled  /></td>
                  </tr>
                  <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                     <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">2</td>
                  </tr>
                   <tr style="color: black">
                    <td>129</td>
                    <td>138</td>
                    <td>147</td>
                    <td>156</td>
                    <td>237</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata129" class="form-control" value="<?php echo $akata129; ?>" disabled  /></td>
                    <td><input type="Number" name="akata138" class="form-control" value="<?php echo $akata138; ?>" disabled  /></td>
                    <td><input type="Number" name="akata147" class="form-control" value="<?php echo $akata147; ?>" disabled  /></td>
                    <td><input type="Number" name="akata156" class="form-control" value="<?php echo $akata156; ?>" disabled  /></td>
                    <td><input type="Number" name="akata237" class="form-control" value="<?php echo $akata237; ?>" disabled  /></td>
                  </tr>
                    <tr style="color: black">
                    <td>246</td>
                    <td>345</td>
                    <td>390</td>
                    <td>480</td>
                    <td>570</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata246" class="form-control" value="<?php echo $akata246; ?>" disabled  /></td>
                    <td><input type="Number" name="akata345" class="form-control" value="<?php echo $akata345; ?>" disabled  /></td>
                    <td><input type="Number" name="akata390" class="form-control" value="<?php echo $akata390; ?>" disabled  /></td>
                    <td><input type="Number" name="akata480" class="form-control" value="<?php echo $akata480; ?>" disabled  /></td>
                    <td><input type="Number" name="akata570" class="form-control" value="<?php echo $akata570; ?>" disabled  /></td>                  
                  </tr>
                   ,
,,
                  <tr style="color: black">
                    <td>589</td>
                    <td>679</td>
                    <td>110</td>
                    <td>228</td>
                    <td>255</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata589" class="form-control" value="<?php echo $akata589; ?>" disabled  /></td>
                    <td><input type="Number" name="akata679" class="form-control" value="<?php echo $akata679; ?>" disabled  /></td>
                    <td><input type="Number" name="akata110" class="form-control" value="<?php echo $akata110; ?>" disabled  /></td>
                    <td><input type="Number" name="akata228" class="form-control" value="<?php echo $akata228; ?>" disabled  /></td>
                    <td><input type="Number" name="akata255" class="form-control" value="<?php echo $akata255; ?>" disabled  /></td>
                  </tr>,,,
,,
                  <tr style="color: black">
                    <td>336</td>
                    <td>499</td>
                    <td>660</td>
                    <td>688</td>
                    <td>778</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata336" class="form-control" value="<?php echo $akata336; ?>" disabled  /></td>
                    <td><input type="Number" name="akata499" class="form-control" value="<?php echo $akata499; ?>" disabled  /></td>
                    <td><input type="Number" name="akata660" class="form-control" value="<?php echo $akata660; ?>" disabled  /></td>
                    <td><input type="Number" name="akata688" class="form-control" value="<?php echo $akata688; ?>" disabled  /></td>
                    <td><input type="Number" name="akata778" class="form-control" value="<?php echo $akata778; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>200</td>
                    <td>444</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata200" class="form-control" value="<?php echo $akata200; ?>" disabled  /></td>
                    <td><input type="Number" name="akata444" class="form-control" value="<?php echo $akata444; ?>" disabled  /></td>
                  </tr>
                  <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>

                  <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">3</td>
                  </tr>
                   <tr style="color: black">
                    <td>120</td>
                    <td>139</td>
                    <td>148</td>
                    <td>157</td>
                    <td>238</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata120" class="form-control" value="<?php echo $akata120; ?>" disabled  /></td>
                    <td><input type="Number" name="akata139" class="form-control" value="<?php echo $akata139; ?>" disabled  /></td>
                    <td><input type="Number" name="akata148" class="form-control" value="<?php echo $akata148; ?>" disabled  /></td>
                    <td><input type="Number" name="akata157" class="form-control" value="<?php echo $akata157; ?>" disabled  /></td>
                    <td><input type="Number" name="akata238" class="form-control" value="<?php echo $akata238; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>247</td>
                    <td>256</td>
                    <td>346</td>
                    <td>490</td>
                    <td>580</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata247" class="form-control" value="<?php echo $akata247; ?>" disabled  /></td>
                    <td><input type="Number" name="akata256" class="form-control" value="<?php echo $akata256; ?>" disabled  /></td>
                    <td><input type="Number" name="akata346" class="form-control" value="<?php echo $akata346; ?>" disabled  /></td>
                    <td><input type="Number" name="akata490" class="form-control" value="<?php echo $akata490; ?>" disabled  /></td>
                    <td><input type="Number" name="akata580" class="form-control" value="<?php echo $akata580; ?>" disabled  /></td>
                  </tr>
                   <tr style="color: black">
                    <td>670</td>
                    <td>689</td>
                    <td>166</td>
                    <td>229</td>
                    <td>337</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata670" class="form-control" value="<?php echo $akata670; ?>" disabled  /></td>
                    <td><input type="Number" name="akata689" class="form-control" value="<?php echo $akata689; ?>" disabled  /></td>
                    <td><input type="Number" name="akata166" class="form-control" value="<?php echo $akata166; ?>" disabled  /></td>
                    <td><input type="Number" name="akata229" class="form-control" value="<?php echo $akata229; ?>" disabled  /></td>
                    <td><input type="Number" name="akata337" class="form-control" value="<?php echo $akata337; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>355</td>
                    <td>445</td>
                    <td>599</td>
                    <td>779</td>
                    <td>788</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata355" class="form-control" value="<?php echo $akata355; ?>" disabled  /></td>
                    <td><input type="Number" name="akata445" class="form-control" value="<?php echo $akata445; ?>" disabled  /></td>
                    <td><input type="Number" name="akata599" class="form-control" value="<?php echo $akata599; ?>" disabled  /></td>
                    <td><input type="Number" name="akata779" class="form-control" value="<?php echo $akata779; ?>" disabled  /></td>
                    <td><input type="Number" name="akata788" class="form-control" value="<?php echo $akata788; ?>" disabled  /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>300</td>
                    <td>111</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata300" class="form-control" value="<?php echo $akata300; ?>" disabled  /></td>
                    <td><input type="Number" name="akata111" class="form-control" value="<?php echo $akata111; ?>" disabled  /></td>
                  </tr>
                 
                   <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
 <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">4</td>
                  </tr>
               
                   <tr style="color: black">
                    <td>130</td>
                    <td>149</td>
                    <td>158</td>
                    <td>167</td>
                    <td>239</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata130" class="form-control" value="<?php echo $akata130; ?>" disabled  /></td>
                    <td><input type="Number" name="akata149" class="form-control" value="<?php echo $akata149; ?>" disabled  /></td>
                    <td><input type="Number" name="akata158" class="form-control" value="<?php echo $akata158; ?>" disabled  /></td>
                    <td><input type="Number" name="akata167" class="form-control" value="<?php echo $akata167; ?>" disabled  /></td>
                    <td><input type="Number" name="akata239" class="form-control" value="<?php echo $akata239; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>248</td>
                    <td>257</td>
                    <td>347</td>
                    <td>356</td>
                    <td>590</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata248" class="form-control" value="<?php echo $akata248; ?>" disabled  /></td>
                    <td><input type="Number" name="akata257" class="form-control" value="<?php echo $akata257; ?>" disabled  /></td>
                    <td><input type="Number" name="akata347" class="form-control" value="<?php echo $akata347; ?>" disabled  /></td>
                    <td><input type="Number" name="akata356" class="form-control" value="<?php echo $akata356; ?>" disabled  /></td>
                    <td><input type="Number" name="akata590" class="form-control" value="<?php echo $akata590; ?>" disabled  /></td>
                     
                  </tr>
                   
                  <tr style="color: black">
                    <td>680</td>
                    <td>789</td>
                    <td>112</td>
                    <td>220</td>
                    <td>266</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata680" class="form-control" value="<?php echo $akata680; ?>" disabled  /></td>
                    <td><input type="Number" name="akata789" class="form-control" value="<?php echo $akata789; ?>" disabled  /></td>
                    <td><input type="Number" name="akata112" class="form-control" value="<?php echo $akata112; ?>" disabled  /></td>
                    <td><input type="Number" name="akata220" class="form-control" value="<?php echo $akata220; ?>" disabled  /></td>
                    <td><input type="Number" name="akata266" class="form-control" value="<?php echo $akata266; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>338</td>
                    <td>446</td>
                    <td>455</td>
                    <td>699</td>
                    <td>770</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata338" class="form-control" value="<?php echo $akata338; ?>" disabled  /></td>
                    <td><input type="Number" name="akata446" class="form-control" value="<?php echo $akata446; ?>" disabled  /></td>
                    <td><input type="Number" name="akata455" class="form-control" value="<?php echo $akata455; ?>" disabled  /></td>
                    <td><input type="Number" name="akata699" class="form-control" value="<?php echo $akata699; ?>" disabled  /></td>
                    <td><input type="Number" name="akata770" class="form-control" value="<?php echo $akata770; ?>" disabled  /></td>
                  </tr>
                   <tr style="color: black">
                    <td>400</td>
                    <td>888</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata400" class="form-control" value="<?php echo $akata400; ?>" disabled  /></td>
                    <td><input type="Number" name="akata888" class="form-control" value="<?php echo $akata888; ?>" disabled  /></td>
                  </tr>

                  <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                  <tr style="color: black">
                    <td colspan="12" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">5</td>
                  </tr>
               
                   <tr style="color: black">
                    <td>140</td>
                    <td>159</td>
                    <td>168</td>
                    <td>230</td>
                    <td>249</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata140" class="form-control" value="<?php echo $akata140; ?>" disabled  /></td>
                    <td><input type="Number" name="akata159" class="form-control" value="<?php echo $akata159; ?>" disabled  /></td>
                    <td><input type="Number" name="akata168" class="form-control" value="<?php echo $akata168; ?>" disabled  /></td>
                    <td><input type="Number" name="akata230" class="form-control" value="<?php echo $akata230; ?>" disabled  /></td>
                    <td><input type="Number" name="akata249" class="form-control" value="<?php echo $akata249; ?>" disabled  /></td>
                  </tr>
                    <tr style="color: black">
                    <td>258</td>
                    <td>267</td>
                    <td>348</td>
                    <td>357</td>
                    <td>456</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata258" class="form-control" value="<?php echo $akata258; ?>" disabled  /></td>
                    <td><input type="Number" name="akata267" class="form-control" value="<?php echo $akata267; ?>" disabled  /></td>
                    <td><input type="Number" name="akata348" class="form-control" value="<?php echo $akata348; ?>" disabled  /></td>
                    <td><input type="Number" name="akata357" class="form-control" value="<?php echo $akata357; ?>" disabled  /></td>
                    <td><input type="Number" name="akata456" class="form-control" value="<?php echo $akata456; ?>" disabled  /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>690</td>
                    <td>780</td>
                    <td>113</td>
                    <td>122</td>
                    <td>177</td>
                  </tr> 
                   <tr>
                    <td><input type="Number" name="akata690" class="form-control" value="<?php echo $akata690; ?>" disabled  /></td>
                    <td><input type="Number" name="akata780" class="form-control" value="<?php echo $akata780; ?>" disabled  /></td>
                    <td><input type="Number" name="akata113" class="form-control" value="<?php echo $akata113; ?>" disabled  /></td>
                    <td><input type="Number" name="akata122" class="form-control" value="<?php echo $akata122; ?>" disabled  /></td>
                    <td><input type="Number" name="akata177" class="form-control" value="<?php echo $akata177; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>339</td>
                    <td>366</td>
                    <td>447</td>
                    <td>799</td>
                    <td>889</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata339" class="form-control" value="<?php echo $akata339; ?>" disabled  /></td>
                    <td><input type="Number" name="akata366" class="form-control" value="<?php echo $akata366; ?>" disabled  /></td>
                    <td><input type="Number" name="akata447" class="form-control" value="<?php echo $akata447; ?>" disabled  /></td>
                    <td><input type="Number" name="akata799" class="form-control" value="<?php echo $akata799; ?>" disabled  /></td>
                    <td><input type="Number" name="akata889" class="form-control" value="<?php echo $akata889; ?>" disabled  /></td>
                  </tr>
                   <tr style="color: black">
                    <td>500</td>
                    <td>555</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata500" class="form-control" value="<?php echo $akata500; ?>" disabled  /></td>
                    <td><input type="Number" name="akata555" class="form-control" value="<?php echo $akata555; ?>" disabled  /></td>
                  </tr>
 <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
 <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">6</td>
                  </tr>
               
                   <tr style="color: black">
                    <td>123</td>
                    <td>150</td>
                    <td>169</td>
                    <td>178</td>
                    <td>240</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata123" class="form-control" value="<?php echo $akata123; ?>" disabled  /></td>
                    <td><input type="Number" name="akata150" class="form-control" value="<?php echo $akata150; ?>" disabled  /></td>
                    <td><input type="Number" name="akata169" class="form-control" value="<?php echo $akata169; ?>" disabled  /></td>
                    <td><input type="Number" name="akata178" class="form-control" value="<?php echo $akata178; ?>" disabled  /></td>
                    <td><input type="Number" name="akata240" class="form-control" value="<?php echo $akata240; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                   
                    <td>259</td>
                    <td>268</td>
                    <td>349</td>
                    <td>358</td>
                    <td>367</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata259" class="form-control" value="<?php echo $akata259; ?>" disabled  /></td>
                    <td><input type="Number" name="akata268" class="form-control" value="<?php echo $akata268; ?>" disabled  /></td>
                    <td><input type="Number" name="akata349" class="form-control" value="<?php echo $akata349; ?>" disabled  /></td>
                    <td><input type="Number" name="akata358" class="form-control" value="<?php echo $akata358; ?>" disabled  /></td>
                    <td><input type="Number" name="akata367" class="form-control" value="<?php echo $akata367; ?>" disabled  /></td>
                    
                  </tr>
                   
                  <tr style="color: black">
                    <td>457</td>
                    <td>790</td>
                    <td>114</td>
                    <td>277</td>
                    <td>330</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata457" class="form-control" value="<?php echo $akata457; ?>" disabled  /></td>
                    <td><input type="Number" name="akata790" class="form-control" value="<?php echo $akata790; ?>" disabled  /></td>
                    <td><input type="Number" name="akata114" class="form-control" value="<?php echo $akata114; ?>" disabled  /></td>
                    <td><input type="Number" name="akata277" class="form-control" value="<?php echo $akata277; ?>" disabled  /></td>
                    <td><input type="Number" name="akata330" class="form-control" value="<?php echo $akata330; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>448</td>
                    <td>466</td>
                    <td>556</td>
                    <td>880</td>
                    <td>899</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata448" class="form-control" value="<?php echo $akata448; ?>" disabled  /></td>
                    <td><input type="Number" name="akata466" class="form-control" value="<?php echo $akata466; ?>" disabled  /></td>
                    <td><input type="Number" name="akata556" class="form-control" value="<?php echo $akata556; ?>" disabled  /></td>
                    <td><input type="Number" name="akata880" class="form-control" value="<?php echo $akata880; ?>" disabled  /></td>
                    <td><input type="Number" name="akata899" class="form-control" value="<?php echo $akata899; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>600</td>
                    <td>222</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata600" class="form-control" value="<?php echo $akata600; ?>" disabled  /></td>
                    <td><input type="Number" name="akata222" class="form-control" value="<?php echo $akata222; ?>" disabled  /></td>
                  </tr>

                  <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
 <tr style="color: black">
                    <td colspan="12" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">7</td>
                  </tr>
                   <tr style="color: black">
                    <td>124</td>
                    <td>160</td>
                    <td>179</td>
                    <td>250</td>
                    <td>269</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata124" class="form-control" value="<?php echo $akata124; ?>" disabled  /></td>
                    <td><input type="Number" name="akata160" class="form-control" value="<?php echo $akata160; ?>" disabled  /></td>
                    <td><input type="Number" name="akata179" class="form-control" value="<?php echo $akata179; ?>" disabled  /></td>
                    <td><input type="Number" name="akata250" class="form-control" value="<?php echo $akata250; ?>" disabled  /></td>
                    <td><input type="Number" name="akata269" class="form-control" value="<?php echo $akata269; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>278</td>
                    <td>340</td>
                    <td>359</td>
                    <td>368</td>
                    <td>458</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata278" class="form-control" value="<?php echo $akata278; ?>" disabled  /></td>
                    <td><input type="Number" name="akata340" class="form-control" value="<?php echo $akata340; ?>" disabled  /></td>
                    <td><input type="Number" name="akata359" class="form-control" value="<?php echo $akata359; ?>" disabled  /></td>
                    <td><input type="Number" name="akata368" class="form-control" value="<?php echo $akata368; ?>" disabled  /></td>
                    <td><input type="Number" name="akata458" class="form-control" value="<?php echo $akata458; ?>" disabled  /></td>
                    
                  </tr>
                   
                  <tr style="color: black">
                    <td>467</td>
                    <td>890</td>
                    <td>115</td>
                    <td>133</td>
                    <td>188</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata467" class="form-control" value="<?php echo $akata467; ?>" disabled  /></td>
                    <td><input type="Number" name="akata890" class="form-control" value="<?php echo $akata890; ?>" disabled  /></td>
                    <td><input type="Number" name="akata115" class="form-control" value="<?php echo $akata115; ?>" disabled  /></td>
                    <td><input type="Number" name="akata133" class="form-control" value="<?php echo $akata133; ?>" disabled  /></td>
                    <td><input type="Number" name="akata188" class="form-control" value="<?php echo $akata188; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>223</td>
                    <td>377</td>
                    <td>449</td>
                    <td>557</td>
                    <td>566</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata223" class="form-control" value="<?php echo $akata223; ?>" disabled  /></td>
                    <td><input type="Number" name="akata377" class="form-control" value="<?php echo $akata377; ?>" disabled  /></td>
                    <td><input type="Number" name="akata449" class="form-control" value="<?php echo $akata449; ?>" disabled  /></td>
                    <td><input type="Number" name="akata557" class="form-control" value="<?php echo $akata557; ?>" disabled  /></td>
                    <td><input type="Number" name="akata566" class="form-control" value="<?php echo $akata566; ?>" disabled  /></td>
                  </tr>
                   <tr style="color: black">
                    <td>700</td>
                    <td>999</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata700" class="form-control" value="<?php echo $akata700; ?>" disabled  /></td>
                    <td><input type="Number" name="akata999" class="form-control" value="<?php echo $akata999; ?>" disabled  /></td>
                  </tr>
                   <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                 <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">8</td>
                  </tr>
                 
                   <tr style="color: black">
                    <td>125</td>
                    <td>134</td>
                    <td>170</td>
                    <td>189</td>
                    <td>260</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata125" class="form-control" value="<?php echo $akata125; ?>" disabled  /></td>
                    <td><input type="Number" name="akata134" class="form-control" value="<?php echo $akata134; ?>" disabled  /></td>
                    <td><input type="Number" name="akata170" class="form-control" value="<?php echo $akata170; ?>" disabled  /></td>
                    <td><input type="Number" name="akata189" class="form-control" value="<?php echo $akata189; ?>" disabled  /></td>
                    <td><input type="Number" name="akata260" class="form-control" value="<?php echo $akata260; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>279</td>
                    <td>350</td>
                    <td>369</td>
                    <td>378</td>
                    <td>459</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata279" class="form-control" value="<?php echo $akata279; ?>" disabled  /></td>
                    <td><input type="Number" name="akata350" class="form-control" value="<?php echo $akata350; ?>" disabled  /></td>
                    <td><input type="Number" name="akata369" class="form-control" value="<?php echo $akata369; ?>" disabled  /></td>
                    <td><input type="Number" name="akata378" class="form-control" value="<?php echo $akata378; ?>" disabled  /></td>
                    <td><input type="Number" name="akata459" class="form-control" value="<?php echo $akata459; ?>" disabled  /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>468</td>
                    <td>567</td>
                    <td>116</td>
                    <td>224</td>
                    <td>233</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata468" class="form-control" value="<?php echo $akata468; ?>" disabled  /></td>
                    <td><input type="Number" name="akata567" class="form-control" value="<?php echo $akata567; ?>" disabled  /></td>
                    <td><input type="Number" name="akata116" class="form-control" value="<?php echo $akata116; ?>" disabled  /></td>
                    <td><input type="Number" name="akata224" class="form-control" value="<?php echo $akata224; ?>" disabled  /></td>
                    <td><input type="Number" name="akata233" class="form-control" value="<?php echo $akata233; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>288</td>
                    <td>440</td>
                    <td>477</td>
                    <td>558</td>
                    <td>990</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata288" class="form-control" value="<?php echo $akata288; ?>" disabled  /></td>
                    <td><input type="Number" name="akata440" class="form-control" value="<?php echo $akata440; ?>" disabled  /></td>
                    <td><input type="Number" name="akata477" class="form-control" value="<?php echo $akata477; ?>" disabled  /></td>
                    <td><input type="Number" name="akata558" class="form-control" value="<?php echo $akata558; ?>" disabled  /></td>
                    <td><input type="Number" name="akata990" class="form-control" value="<?php echo $akata990; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>800</td>
                    <td>666</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata800" class="form-control" value="<?php echo $akata800; ?>" disabled  /></td>
                    <td><input type="Number" name="akata666" class="form-control" value="<?php echo $akata666; ?>" disabled  /></td>
                  </tr>
                    <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">9</td>
                  </tr>

                   <tr style="color: black">
                    <td>126</td>
                    <td>135</td>
                    <td>180</td>
                    <td>234</td>
                    <td>270</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata126" class="form-control" value="<?php echo $akata126; ?>" disabled  /></td>
                    <td><input type="Number" name="akata135" class="form-control" value="<?php echo $akata135; ?>" disabled  /></td>
                    <td><input type="Number" name="akata180" class="form-control" value="<?php echo $akata180; ?>" disabled  /></td>
                    <td><input type="Number" name="akata234" class="form-control" value="<?php echo $akata234; ?>" disabled  /></td>
                    <td><input type="Number" name="akata270" class="form-control" value="<?php echo $akata270; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>289</td>
                    <td>360</td>
                    <td>379</td>
                    <td>450</td>
                    <td>469</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata289" class="form-control" value="<?php echo $akata289; ?>" disabled  /></td>
                    <td><input type="Number" name="akata360" class="form-control" value="<?php echo $akata360; ?>" disabled  /></td>
                    <td><input type="Number" name="akata379" class="form-control" value="<?php echo $akata379; ?>" disabled  /></td>
                    <td><input type="Number" name="akata450" class="form-control" value="<?php echo $akata450; ?>" disabled  /></td>
                    <td><input type="Number" name="akata469" class="form-control" value="<?php echo $akata469; ?>" disabled  /></td>
                    
                  </tr>
                   
                  <tr style="color: black">
                    <td>478</td>
                    <td>568</td>
                    <td>117</td>
                    <td>144</td>
                    <td>199</td>
                    </tr>
                   <tr>
                    <td><input type="Number" name="akata478" class="form-control" value="<?php echo $akata478; ?>" disabled  /></td>
                    <td><input type="Number" name="akata568" class="form-control" value="<?php echo $akata568; ?>" disabled  /></td>
                    <td><input type="Number" name="akata117" class="form-control" value="<?php echo $akata117; ?>" disabled  /></td>
                    <td><input type="Number" name="akata144" class="form-control" value="<?php echo $akata144; ?>" disabled  /></td>
                    <td><input type="Number" name="akata199" class="form-control" value="<?php echo $akata199; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>225</td>
                    <td>388</td>
                    <td>559</td>
                    <td>577</td>
                    <td>667</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata225" class="form-control" value="<?php echo $akata225; ?>" disabled  /></td>
                    <td><input type="Number" name="akata388" class="form-control" value="<?php echo $akata388; ?>" disabled  /></td>
                    <td><input type="Number" name="akata559" class="form-control" value="<?php echo $akata559; ?>" disabled  /></td>
                    <td><input type="Number" name="akata577" class="form-control" value="<?php echo $akata577; ?>" disabled  /></td>
                    <td><input type="Number" name="akata667" class="form-control" value="<?php echo $akata667; ?>" disabled  /></td>
                  </tr>

                 <tr style="color: black">
                    <td>900</td>
                    <td>333</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata900" class="form-control" value="<?php echo $akata900; ?>" disabled  /></td>
                    <td><input type="Number" name="akata333" class="form-control" value="<?php echo $akata333; ?>" disabled  /></td>
                  </tr>
                        <tr>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                <tr style="color: black">
                    <td colspan="5" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">0</td>
                  </tr>
                 
                   <tr style="color: black">
                    <td>127</td>
                    <td>136</td>
                    <td>145</td>
                    <td>190</td>
                    <td>235</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata127" class="form-control" value="<?php echo $akata127; ?>" disabled  /></td>
                    <td><input type="Number" name="akata136" class="form-control" value="<?php echo $akata136; ?>" disabled  /></td>
                    <td><input type="Number" name="akata145" class="form-control" value="<?php echo $akata145; ?>" disabled  /></td>
                    <td><input type="Number" name="akata190" class="form-control" value="<?php echo $akata190; ?>" disabled  /></td>
                    <td><input type="Number" name="akata235" class="form-control" value="<?php echo $akata235; ?>" disabled  /></td>
                   
                  </tr>
                    <tr style="color: black">
                    <td>280</td>
                    <td>370</td>
                    <td>389</td>
                    <td>460</td>
                    <td>479</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata280" class="form-control" value="<?php echo $akata280; ?>" disabled  /></td>
                    <td><input type="Number" name="akata370" class="form-control" value="<?php echo $akata370; ?>" disabled  /></td>
                    <td><input type="Number" name="akata389" class="form-control" value="<?php echo $akata389; ?>" disabled  /></td>
                    <td><input type="Number" name="akata460" class="form-control" value="<?php echo $akata460; ?>" disabled  /></td>
                    <td><input type="Number" name="akata479" class="form-control" value="<?php echo $akata479; ?>" disabled  /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>569</td>
                    <td>578</td>
                    <td>118</td>
                    <td>226</td>
                    <td>244</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata569" class="form-control" value="<?php echo $akata569; ?>" disabled  /></td>
                    <td><input type="Number" name="akata578" class="form-control" value="<?php echo $akata578; ?>" disabled  /></td>
                    <td><input type="Number" name="akata118" class="form-control" value="<?php echo $akata118; ?>" disabled  /></td>
                    <td><input type="Number" name="akata226" class="form-control" value="<?php echo $akata226; ?>" disabled  /></td>
                    <td><input type="Number" name="akata244" class="form-control" value="<?php echo $akata244; ?>" disabled  /></td>
                  </tr>
                  <tr style="color: black">
                    <td>299</td>
                    <td>334</td>
                    <td>488</td>
                    <td>668</td>
                     <td>677</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata299" class="form-control" value="<?php echo $akata299; ?>" disabled  /></td>
                    <td><input type="Number" name="akata334" class="form-control" value="<?php echo $akata334; ?>" disabled  /></td>
                    <td><input type="Number" name="akata488" class="form-control" value="<?php echo $akata488; ?>" disabled  /></td>
                    <td><input type="Number" name="akata668" class="form-control" value="<?php echo $akata668; ?>" disabled  /></td>
                    <td><input type="Number" name="akata677" class="form-control" value="<?php echo $akata677; ?>" disabled  /></td>
                  </tr>
                 <tr style="color: black">
                    <td>000</td>
                    <td>550</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata000" class="form-control" value="<?php echo $akata000; ?>" disabled  /></td>
                    <td><input type="Number" name="akata550" class="form-control" value="<?php echo $akata550; ?>" disabled  /></td>
                  </tr>


                 </table>
                </div>
            </div>
             
             

          </div>
        </div>
      </div>
    </div>
  
</section> 

        </div>
    </div>    
</div>

</div>
            <!-- /.content-wrapper -->
 <!-- Main Footer -->
            <?php include "footer.php"; ?>
            

