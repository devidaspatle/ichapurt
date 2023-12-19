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
$queryss = "SELECT * FROM    tbl_jodis  where 	customerId  ='".$tsoftId."' and category_name='".$catid."' and id='".$bidid."'";

$resultss = $crud->getData($queryss);
foreach ($resultss as $key => $row) { 	
  $category_name = $row['category_name'];	
  $akata01 = $row['akata01'];
    $akata02 = $row['akata02'];
    $akata03 = $row['akata03'];
    $akata04 = $row['akata04'];
    $akata05 = $row['akata05'];
    $akata06 = $row['akata06'];
    $akata07 = $row['akata07'];
    $akata08 = $row['akata08'];
    $akata09 = $row['akata09'];
    $akata10 = $row['akata10'];
    $akata11 = $row['akata11'];
    $akata12 = $row['akata12'];
    $akata13 = $row['akata13'];
    $akata14 = $row['akata14'];
    $akata15 = $row['akata15'];
    $akata16 = $row['akata16'];
    $akata17 = $row['akata17'];
    $akata18 = $row['akata18'];
    $akata19 = $row['akata19'];
    $akata20 = $row['akata20'];
    $akata21 = $row['akata21'];
    $akata22 = $row['akata22'];
    $akata23 = $row['akata23'];
    $akata24 = $row['akata24'];
    $akata25 = $row['akata25'];
    $akata26 = $row['akata26'];
    $akata27 = $row['akata27'];
    $akata28 = $row['akata28'];
    $akata29 = $row['akata29'];
    $akata30 = $row['akata30'];
    $akata31 = $row['akata31'];
    $akata32 = $row['akata32'];
    $akata33 = $row['akata33'];
    $akata34 = $row['akata34'];
    $akata35 = $row['akata35'];
    $akata36 = $row['akata36'];
    $akata37 = $row['akata37'];
    $akata38 = $row['akata38'];
    $akata39 = $row['akata39'];
    $akata40 = $row['akata40'];
    $akata41 = $row['akata41'];
    $akata42 = $row['akata42'];
    $akata43 = $row['akata43'];
    $akata44 = $row['akata44'];
    $akata45 = $row['akata45'];
    $akata46 = $row['akata46'];
    $akata47 = $row['akata47'];
    $akata48 = $row['akata48'];
    $akata49 = $row['akata49'];
    $akata50 = $row['akata50'];
    $akata51 = $row['akata51'];
    $akata52 = $row['akata52'];
    $akata53 = $row['akata53'];
    $akata54 = $row['akata54'];
    $akata55 = $row['akata55'];
    $akata56 = $row['akata56'];
    $akata57 = $row['akata57'];
    $akata58 = $row['akata58'];
    $akata59 = $row['akata59'];
    $akata60 = $row['akata60'];
    $akata61 = $row['akata61'];
    $akata62 = $row['akata62'];
    $akata63 = $row['akata63'];
    $akata64 = $row['akata64'];
    $akata65 = $row['akata65'];
    $akata66 = $row['akata66'];
    $akata67 = $row['akata67'];
    $akata68 = $row['akata68'];
    $akata69 = $row['akata69'];
    $akata70 = $row['akata70'];
    $akata71 = $row['akata71'];
    $akata72 = $row['akata72'];
    $akata73 = $row['akata73'];
    $akata74 = $row['akata74'];
    $akata75 = $row['akata75'];
    $akata76 = $row['akata76'];
    $akata77 = $row['akata77'];
    $akata78 = $row['akata78'];
    $akata79 = $row['akata79'];
    $akata80 = $row['akata80'];
    $akata81 = $row['akata81'];
    $akata82 = $row['akata82'];
    $akata83 = $row['akata83'];
    $akata84 = $row['akata84'];
    $akata85 = $row['akata85'];
    $akata86 = $row['akata86'];
    $akata87 = $row['akata87'];
    $akata88 = $row['akata88'];
    $akata89 = $row['akata89'];
    $akata90 = $row['akata90'];
    $akata91 = $row['akata91'];
    $akata92 = $row['akata92'];
    $akata93 = $row['akata93'];
    $akata94 = $row['akata94'];
    $akata95 = $row['akata95'];
    $akata96 = $row['akata96'];
    $akata97 = $row['akata97'];
    $akata98 = $row['akata98'];
    $akata99 = $row['akata99'];
    $akata100 = $row['akata100'];
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
            <h3 class="title">JODI NUMBER</h3> 
               <section class="h-100 h-custom">
  
          <div class="card-body">
         
           

             <div class="row">
            
              <div class="col-md-12" style="padding: 20px;">
                <input type="hidden" name="mattaka_name" value="ichaapurti_day_jodi" class="form-control" />
                 <input type="hidden" name="customer_id" value="<?php echo $_SESSION['tsoftId'];?>" />
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: left;"><h3> Jodi Number(<?php echo $category_name;?>)</h3></td>
                     <td  style="text-align: right;">  <a href="bid_history.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                  </tr>
                   <tr style="color: black">
                    <td colspan="5">&nbsp;</td>
                  </tr>
                   <tr style="color: black">
                    <td>00</td>
                    <td>10</td>
                    <td>20</td>
                    <td>30</td>
                    <td>40</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata00" class="form-control" value="<?php echo $akata00;?>" disabled /></td>
                    <td><input type="Number" name="akata10" class="form-control" value="<?php echo $akata10;?>" disabled /></td>
                    <td><input type="Number" name="akata20" class="form-control" value="<?php echo $akata20;?>" disabled /></td>
                    <td><input type="Number" name="akata30" class="form-control" value="<?php echo $akata30;?>" disabled /></td>
                    <td><input type="Number" name="akata40" class="form-control" value="<?php echo $akata40;?>" disabled /></td>
                  </tr>
                  
                  <tr style="color: black">
                    <td>01</td>
                    <td>11</td>
                    <td>21</td>
                    <td>31</td>
                    <td>41</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata01" class="form-control" value="<?php echo $akata01;?>" disabled /></td>
                    <td><input type="Number" name="akata11" class="form-control" value="<?php echo $akata11;?>" disabled /></td>
                    <td><input type="Number" name="akata21" class="form-control" value="<?php echo $akata21;?>" disabled /></td>
                    <td><input type="Number" name="akata31" class="form-control" value="<?php echo $akata31;?>" disabled /></td>
                    <td><input type="Number" name="akata41" class="form-control" value="<?php echo $akata41;?>" disabled /></td>
                  </tr>

                  <tr style="color: black">
                    <td>02</td>
                    <td>12</td>
                    <td>22</td>
                    <td>32</td>
                    <td>42</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata02" class="form-control" value="<?php echo $akata02;?>" disabled /></td>
                    <td><input type="Number" name="akata12" class="form-control" value="<?php echo $akata12;?>" disabled /></td>
                    <td><input type="Number" name="akata22" class="form-control" value="<?php echo $akata22;?>" disabled /></td>
                    <td><input type="Number" name="akata32" class="form-control" value="<?php echo $akata32;?>" disabled /></td>
                    <td><input type="Number" name="akata42" class="form-control" value="<?php echo $akata42;?>" disabled /></td>
                  
                  </tr>

                  <tr style="color: black">
                    <td>03</td>
                    <td>13</td>
                    <td>23</td>
                    <td>33</td>
                    <td>43</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata03" class="form-control" value="<?php echo $akata03;?>" disabled /></td>
                    <td><input type="Number" name="akata13" class="form-control" value="<?php echo $akata13;?>" disabled /></td>
                    <td><input type="Number" name="akata23" class="form-control" value="<?php echo $akata23;?>" disabled /></td>
                    <td><input type="Number" name="akata33" class="form-control" value="<?php echo $akata33;?>" disabled /></td>
                    <td><input type="Number" name="akata43" class="form-control" value="<?php echo $akata43;?>" disabled /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>04</td>
                    <td>14</td>
                    <td>24</td>
                    <td>34</td>
                    <td>44</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata04" class="form-control" value="<?php echo $akata04;?>" disabled /></td>
                    <td><input type="Number" name="akata14" class="form-control" value="<?php echo $akata14;?>" disabled /></td>
                    <td><input type="Number" name="akata24" class="form-control" value="<?php echo $akata24;?>" disabled /></td>
                    <td><input type="Number" name="akata34" class="form-control" value="<?php echo $akata34;?>" disabled /></td>
                    <td><input type="Number" name="akata44" class="form-control" value="<?php echo $akata44;?>" disabled /></td>
                  </tr>
                  
                  <tr style="color: black">
                    <td>05</td>
                    <td>15</td>
                    <td>25</td>
                    <td>35</td>
                    <td>45</td>
                    
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata05" class="form-control" value="<?php echo $akata05;?>" disabled /></td>
                    <td><input type="Number" name="akata15" class="form-control" value="<?php echo $akata15;?>" disabled /></td>
                    <td><input type="Number" name="akata25" class="form-control" value="<?php echo $akata25;?>" disabled /></td>
                    <td><input type="Number" name="akata35" class="form-control" value="<?php echo $akata35;?>" disabled /></td>
                    <td><input type="Number" name="akata45" class="form-control" value="<?php echo $akata45;?>" disabled /></td>
                  </tr>
                   
                   <tr style="color: black">
                    <td>06</td>
                    <td>16</td>
                    <td>26</td>
                    <td>36</td>
                    <td>46</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata06" class="form-control" value="<?php echo $akata06;?>" disabled /></td>
                    <td><input type="Number" name="akata16" class="form-control" value="<?php echo $akata16;?>" disabled /></td>
                    <td><input type="Number" name="akata26" class="form-control" value="<?php echo $akata26;?>" disabled /></td>
                    <td><input type="Number" name="akata36" class="form-control" value="<?php echo $akata36;?>" disabled /></td>
                    <td><input type="Number" name="akata46" class="form-control" value="<?php echo $akata46;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>07</td>
                    <td>17</td>
                    <td>27</td>
                    <td>37</td>
                    <td>47</td>
                  </tr>
                  <tr>
                    <td><input type="Number" name="akata07" class="form-control" value="<?php echo $akata07;?>" disabled /></td>
                    <td><input type="Number" name="akata17" class="form-control" value="<?php echo $akata17;?>" disabled /></td>
                    <td><input type="Number" name="akata27" class="form-control" value="<?php echo $akata27;?>" disabled /></td>
                    <td><input type="Number" name="akata37" class="form-control" value="<?php echo $akata37;?>" disabled /></td>
                    <td><input type="Number" name="akata47" class="form-control" value="<?php echo $akata47;?>" disabled /></td>
                  </tr>
                  
                   <tr style="color: black">
                    <td>08</td>
                    <td>18</td>
                    <td>28</td>
                    <td>38</td>
                    <td>48</td>                  
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata08" class="form-control" value="<?php echo $akata08;?>" disabled /></td>
                    <td><input type="Number" name="akata18" class="form-control" value="<?php echo $akata18;?>" disabled /></td>
                    <td><input type="Number" name="akata28" class="form-control" value="<?php echo $akata28;?>" disabled /></td>
                    <td><input type="Number" name="akata38" class="form-control" value="<?php echo $akata38;?>" disabled /></td>
                    <td><input type="Number" name="akata48" class="form-control" value="<?php echo $akata48;?>" disabled /></td>
                  </tr>
                  
                   <tr style="color: black">
                    <td>09</td>
                    <td>19</td>
                    <td>29</td>
                    <td>39</td>
                    <td>49</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata09" class="form-control" value="<?php echo $akata09;?>" disabled /></td>
                    <td><input type="Number" name="akata19" class="form-control" value="<?php echo $akata19;?>" disabled  /></td>
                    <td><input type="Number" name="akata29" class="form-control" value="<?php echo $akata29;?>" disabled  /></td>
                    <td><input type="Number" name="akata39" class="form-control" value="<?php echo $akata39;?>" disabled  /></td>
                    <td><input type="Number" name="akata49" class="form-control" value="<?php echo $akata49;?>" disabled  /></td>
                  </tr>
                   <tr style="color: black">
                    <td>50</td>
                    <td>60</td>
                    <td>70</td>
                    <td>80</td>
                    <td>90</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata50" class="form-control" value="<?php echo $akata50;?>" disabled /></td>
                    <td><input type="Number" name="akata60" class="form-control" value="<?php echo $akata60;?>" disabled /></td>
                    <td><input type="Number" name="akata70" class="form-control" value="<?php echo $akata70;?>" disabled /></td>
                    <td><input type="Number" name="akata80" class="form-control" value="<?php echo $akata80;?>" disabled /></td>
                    <td><input type="Number" name="akata90" class="form-control" value="<?php echo $akata90;?>" disabled /></td>
                  </tr>
                  <tr style="color: black">
                    <td>51</td>
                    <td>61</td>
                    <td>71</td>
                    <td>81</td>
                    <td>91</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata51" class="form-control" value="<?php echo $akata51;?>" disabled /></td>
                    <td><input type="Number" name="akata61" class="form-control" value="<?php echo $akata61;?>" disabled /></td>
                    <td><input type="Number" name="akata71" class="form-control" value="<?php echo $akata71;?>" disabled /></td>
                    <td><input type="Number" name="akata81" class="form-control" value="<?php echo $akata81;?>" disabled /></td>
                    <td><input type="Number" name="akata91" class="form-control" value="<?php echo $akata91;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>52</td>
                    <td>62</td>
                    <td>72</td>
                    <td>82</td>
                    <td>92</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata52" class="form-control" value="<?php echo $akata52;?>" disabled /></td>
                    <td><input type="Number" name="akata62" class="form-control" value="<?php echo $akata62;?>" disabled /></td>
                    <td><input type="Number" name="akata72" class="form-control" value="<?php echo $akata72;?>" disabled /></td>
                    <td><input type="Number" name="akata82" class="form-control" value="<?php echo $akata82;?>" disabled /></td>
                    <td><input type="Number" name="akata92" class="form-control" value="<?php echo $akata92;?>" disabled /></td>
                  </tr>
                  <tr style="color: black">
                    <td>53</td>
                    <td>63</td>
                    <td>73</td>
                    <td>83</td>
                    <td>93</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata53" class="form-control" value="<?php echo $akata53;?>" disabled /></td>
                    <td><input type="Number" name="akata63" class="form-control" value="<?php echo $akata63;?>" disabled /></td>
                    <td><input type="Number" name="akata73" class="form-control" value="<?php echo $akata73;?>" disabled /></td>
                    <td><input type="Number" name="akata83" class="form-control" value="<?php echo $akata83;?>" disabled /></td>
                    <td><input type="Number" name="akata93" class="form-control" value="<?php echo $akata93;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>54</td>
                    <td>64</td>
                    <td>74</td>
                    <td>84</td>
                    <td>94</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata54" class="form-control" value="<?php echo $akata54;?>" disabled /></td>
                    <td><input type="Number" name="akata64" class="form-control" value="<?php echo $akata64;?>" disabled /></td>
                    <td><input type="Number" name="akata74" class="form-control" value="<?php echo $akata74;?>" disabled /></td>
                    <td><input type="Number" name="akata84" class="form-control" value="<?php echo $akata84;?>" disabled /></td>
                    <td><input type="Number" name="akata94" class="form-control" value="<?php echo $akata94;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                   
                    <td>55</td>
                    <td>65</td>
                    <td>75</td>
                    <td>85</td>
                    <td>95</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata55" class="form-control" value="<?php echo $akata55;?>" disabled /></td>
                    <td><input type="Number" name="akata65" class="form-control" value="<?php echo $akata65;?>" disabled /></td>
                    <td><input type="Number" name="akata75" class="form-control" value="<?php echo $akata75;?>" disabled /></td>
                    <td><input type="Number" name="akata85" class="form-control" value="<?php echo $akata85;?>" disabled /></td>
                    <td><input type="Number" name="akata95" class="form-control" value="<?php echo $akata95;?>" disabled /></td>
                  </tr>
                    <tr style="color: black">
                    <td>56</td>
                    <td>66</td>
                    <td>76</td>
                    <td>86</td>
                    <td>96</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata56" class="form-control" value="<?php echo $akata56;?>" disabled /></td>
                    <td><input type="Number" name="akata66" class="form-control" value="<?php echo $akata66;?>" disabled /></td>
                    <td><input type="Number" name="akata76" class="form-control" value="<?php echo $akata76;?>" disabled /></td>
                    <td><input type="Number" name="akata86" class="form-control" value="<?php echo $akata86;?>" disabled /></td>
                    <td><input type="Number" name="akata96" class="form-control" value="<?php echo $akata96;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>57</td>
                    <td>67</td>
                    <td>77</td>
                    <td>87</td>
                    <td>97</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata57" class="form-control" value="<?php echo $akata57;?>" disabled /></td>
                    <td><input type="Number" name="akata67" class="form-control" value="<?php echo $akata67;?>" disabled /></td>
                    <td><input type="Number" name="akata77" class="form-control" value="<?php echo $akata77;?>" disabled /></td>
                    <td><input type="Number" name="akata87" class="form-control" value="<?php echo $akata87;?>" disabled /></td>
                    <td><input type="Number" name="akata97" class="form-control" value="<?php echo $akata97;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>58</td>
                    <td>68</td>
                    <td>78</td>
                    <td>88</td>
                    <td>98</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata58" class="form-control" value="<?php echo $akata58;?>" disabled /></td>
                    <td><input type="Number" name="akata68" class="form-control" value="<?php echo $akata68;?>" disabled /></td>
                    <td><input type="Number" name="akata78" class="form-control" value="<?php echo $akata78;?>" disabled /></td>
                    <td><input type="Number" name="akata88" class="form-control" value="<?php echo $akata88;?>" disabled /></td>
                    <td><input type="Number" name="akata98" class="form-control" value="<?php echo $akata98;?>" disabled /></td>
                  </tr>
                   <tr style="color: black">
                    <td>59</td>
                    <td>69</td>
                    <td>79</td>
                    <td>89</td>
                    <td>99</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata59" class="form-control" value="<?php echo $akata59;?>" disabled /></td>
                    <td><input type="Number" name="akata69" class="form-control" value="<?php echo $akata69;?>" disabled /></td>
                    <td><input type="Number" name="akata79" class="form-control" value="<?php echo $akata79;?>" disabled /></td>
                    <td><input type="Number" name="akata89" class="form-control" value="<?php echo $akata89;?>" disabled /></td>
                    <td><input type="Number" name="akata99" class="form-control" value="<?php echo $akata99;?>" disabled /></td>
                  </tr>
                  
                </table>
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


   <?php include "footer.php"; ?>