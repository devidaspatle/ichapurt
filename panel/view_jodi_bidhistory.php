<?php
$con = mysqli_connect("localhost","ichaapu1_ayub","u?),0%?-p[8L","ichaapu1_ayub");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM  tbl_singleakata where ";
$result = mysqli_query($con,$sql);

// Numeric array
$row = mysqli_fetch_array($result, MYSQLI_NUM);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to admin panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Required CSS -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/pace/pace-theme-flash.css">
    
    <!-- Datatables Buttons -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

    <!-- textarea editor -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/themes/royal.min.css">
    <!-- /texarea editor; -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/mystyle.css">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://ichaapurti.com/panel/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/select2/js/select2.full.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>    
</head>

<!-- Must Load First -->

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="dashboard" class="logo" style="height: 70px;">
    
    <img src="assets\dist\img\logo.png" height="70px;">
</a>

<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="https://ichaapurti.com/panel/home" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                 

                                       <div class="top-right links">
                                           <span class="me-2">   <a href="https://ichaapurti.com/panel/home" style="color:white">admin</span></a></span>
                      
                                    </div>
                            </a>
               
            </li>
             <li class="user user-menu"> 
             
                                 <a class="dropdown-item" style="display:block;width:40%" href="https://ichaapurti.com/panel/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="https://ichaapurti.com/panel/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="lS6HTNgwBGyAhndXJuWo7qo73QrnACj61j7Mrv5k">                                    </form></li>
        </ul>
    </div>
</nav>      </header>
        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://ichaapurti.com/panel/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
            </div>
           
        </div>
        
        <ul class="sidebar-menu" data-widget="tree">
           
            <!-- Optionally, you can add icons to the links -->
             <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
             
             <li class="">
                <a href="https://ichaapurti.com/panel/mattakaresults" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Results</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/jodicharts" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Jodi Charts</span>
                </a>
            </li>
              <li class="">
                <a href="https://ichaapurti.com/panel/customers" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Customer</span>
                </a>
            </li>
             
            <li class="treeview">
              
                <a href="#"><i class="fa fa-folder-open"></i> <span>My Wallet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="https://ichaapurti.com/panel/walletsbals">
                            <i class="fa fa-bars"></i> 
                             Wallet Balance
                        </a>
                    </li>
                   
                 
                   
                    <li class="">
                        <a href="https://ichaapurti.com/panel/fundrequests">
                            <i class="fa fa-bars"></i>
                               Funds Request History
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="https://ichaapurti.com/panel/transferpoints">
                            <i class="fa fa-bars"></i>
                             Transfer Points
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/banjaccounts" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bank Account</span>
                </a>
            </li>
              <li class="">
                <a href="https://ichaapurti.com/panel/bidhistorys" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bid History</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/winhistorys" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Win History</span>
                </a>
            </li>
          
           
            <li class="">
                <a href="https://ichaapurti.com/panel/notices" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Notice</span>
                </a>
            </li>
          
              <li class="">
                <a href="https://ichaapurti.com/panel/onlinemattakas" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Online Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="https://ichaapurti.com/panel/aboutmattakas" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>About Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="https://ichaapurti.com/panel/categories" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span> Manage Category  </span>
                </a>
            </li>
          
            <li class="">
                <a href="users" rel="noopener noreferrer">
                    <i class="fa fa-users"></i> <span> Change Password</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/logout" rel="noopener noreferrer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                    <i class="fa fa-cogs"></i> Logout 
                                    <form id="logout-form" action="https://ichaapurti.com/panel/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="lS6HTNgwBGyAhndXJuWo7qo73QrnACj61j7Mrv5k">                                    </form>
                </a>
            </li>
            
                    </ul>

    </section>
    <!-- /.sidebar -->
</aside>  
      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bid History
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Single Akata Number </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
   
    <div class="box-body">
        
         <div class="mt-2 mb-3">
          <div class="row">
             <div class="col-md-12">
                
             <table style="width:100%">
                        <tr style="color: black">
                           <td colspan="4" style="text-align: left;">
                              <h3> Jodi Number</h3>
                           </td>
                           <td  style="text-align: right;">  <a href="{{ route('bidhistorys.index') '];?>"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td>00</td>
                           <td>01</td>
                           <td>02</td>
                           <td>03</td>
                           <td>04</td>
                           <td>05</td>
                           <td>06</td>
                           <td>07</td>
                           <td>08</td>
                           <td>09</td>
                           <td>10</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata00" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata10" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata20" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata30" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata40" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata01" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata11" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata21" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata31" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata41" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>11</td>
                           <td>12</td>
                           <td>13</td>
                           <td>14</td>
                           <td>15</td>
                           <td>16</td>
                           <td>17</td>
                           <td>18</td>
                           <td>19</td>
                           <td>20</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata02" class="form-control" readonly value="<?php echo $bidhistory['akata11'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata12" class="form-control" readonly value="<?php echo $bidhistory['akata12'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata22" class="form-control" readonly value="<?php echo $bidhistory['akata13'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata32" class="form-control" readonly value="<?php echo $bidhistory['akata14'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata42" class="form-control" readonly value="<?php echo $bidhistory['akata15'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata03" class="form-control" readonly value="<?php echo $bidhistory['akata16'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata13" class="form-control" readonly value="<?php echo $bidhistory['akata17'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata23" class="form-control" readonly value="<?php echo $bidhistory['akata18'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata33" class="form-control" readonly value="<?php echo $bidhistory['akata19'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata43" class="form-control" readonly value="<?php echo $bidhistory['akata20'];?>"   min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>21</td>
                           <td>22</td>
                           <td>23</td>
                           <td>24</td>
                           <td>25</td>
                           <td>26</td>
                           <td>27</td>
                           <td>28</td>
                           <td>29</td>
                           <td>30</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata04" class="form-control" readonly  value="<?php echo $bidhistory['akata21'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata14" class="form-control" readonly  value="<?php echo $bidhistory['akata22'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata24" class="form-control" readonly  value="<?php echo $bidhistory['akata23'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata34" class="form-control" readonly  value="<?php echo $bidhistory['akata24'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata44" class="form-control" readonly  value="<?php echo $bidhistory['akata25'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata05" class="form-control" readonly  value="<?php echo $bidhistory['akata26'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata15" class="form-control" readonly  value="<?php echo $bidhistory['akata27'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata25" class="form-control" readonly  value="<?php echo $bidhistory['akata28'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata35" class="form-control" readonly  value="<?php echo $bidhistory['akata29'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata45" class="form-control" readonly  value="<?php echo $bidhistory['akata30'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>31</td>
                           <td>32</td>
                           <td>33</td>
                           <td>34</td>
                           <td>35</td>
                           <td>36</td>
                           <td>37</td>
                           <td>38</td>
                           <td>39</td>
                           <td>40</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata06" class="form-control" readonly  value="<?php echo $bidhistory['akata31'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata16" class="form-control" readonly  value="<?php echo $bidhistory['akata32'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata26" class="form-control" readonly  value="<?php echo $bidhistory['akata33'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata36" class="form-control" readonly  value="<?php echo $bidhistory['akata34'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata46" class="form-control" readonly  value="<?php echo $bidhistory['akata35'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata07" class="form-control" readonly  value="<?php echo $bidhistory['akata36'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata17" class="form-control" readonly  value="<?php echo $bidhistory['akata37'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata27" class="form-control" readonly  value="<?php echo $bidhistory['akata38'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata37" class="form-control" readonly  value="<?php echo $bidhistory['akata39'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata47" class="form-control" readonly  value="<?php echo $bidhistory['akata40'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>41</td>
                           <td>42</td>
                           <td>43</td>
                           <td>44</td>
                           <td>45</td>
                           <td>46</td>
                           <td>47</td>
                           <td>48</td>
                           <td>49</td>
                           <td>50</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata08" class="form-control" readonly value="<?php echo $bidhistory['akata41'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata18" class="form-control" readonly value="<?php echo $bidhistory['akata42'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata28" class="form-control" readonly value="<?php echo $bidhistory['akata43'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata38" class="form-control" readonly value="<?php echo $bidhistory['akata44'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata48" class="form-control" readonly value="<?php echo $bidhistory['akata45'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata09" class="form-control" readonly value="<?php echo $bidhistory['akata46'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata19" class="form-control" readonly value="<?php echo $bidhistory['akata47'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata29" class="form-control" readonly value="<?php echo $bidhistory['akata48'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata39" class="form-control" readonly value="<?php echo $bidhistory['akata49'];?>"   min="11" /></td>
                           <td><input type="Number" name="akata49" class="form-control" readonly value="<?php echo $bidhistory['akata50'];?>"   min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>51</td>
                           <td>52</td>
                           <td>53</td>
                           <td>54</td>
                           <td>55</td>
                           <td>56</td>
                           <td>57</td>
                           <td>58</td>
                           <td>59</td>
                           <td>60</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata50" class="form-control" readonly  value="<?php echo $bidhistory['akata51'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata60" class="form-control" readonly  value="<?php echo $bidhistory['akata52'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata70" class="form-control" readonly  value="<?php echo $bidhistory['akata53'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata80" class="form-control" readonly  value="<?php echo $bidhistory['akata54'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata90" class="form-control" readonly  value="<?php echo $bidhistory['akata55'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata51" class="form-control" readonly  value="<?php echo $bidhistory['akata56'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata61" class="form-control" readonly  value="<?php echo $bidhistory['akata57'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata71" class="form-control" readonly  value="<?php echo $bidhistory['akata58'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata81" class="form-control" readonly  value="<?php echo $bidhistory['akata59'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata91" class="form-control" readonly  value="<?php echo $bidhistory['akata60'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>61</td>
                           <td>62</td>
                           <td>63</td>
                           <td>64</td>
                           <td>65</td>
                           <td>66</td>
                           <td>67</td>
                           <td>68</td>
                           <td>69</td>
                           <td>70</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata52" class="form-control" readonly  value="<?php echo $bidhistory['akata61'];?>"  min="11"  /></td>
                           <td><input type="Number" name="akata62" class="form-control" readonly  value="<?php echo $bidhistory['akata62'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata72" class="form-control" readonly  value="<?php echo $bidhistory['akata63'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata82" class="form-control" readonly  value="<?php echo $bidhistory['akata64'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata92" class="form-control" readonly  value="<?php echo $bidhistory['akata65'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata53" class="form-control" readonly  value="<?php echo $bidhistory['akata66'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata63" class="form-control" readonly  value="<?php echo $bidhistory['akata67'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata73" class="form-control" readonly  value="<?php echo $bidhistory['akata68'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata83" class="form-control" readonly  value="<?php echo $bidhistory['akata69'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata93" class="form-control" readonly  value="<?php echo $bidhistory['akata70'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>71</td>
                           <td>72</td>
                           <td>73</td>
                           <td>74</td>
                           <td>75</td>
                           <td>76</td>
                           <td>77</td>
                           <td>78</td>
                           <td>79</td>
                           <td>80</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata54" class="form-control" readonly  value="<?php echo $bidhistory['akata71'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata64" class="form-control" readonly  value="<?php echo $bidhistory['akata72'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata74" class="form-control" readonly  value="<?php echo $bidhistory['akata73'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata84" class="form-control" readonly  value="<?php echo $bidhistory['akata74'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata94" class="form-control" readonly  value="<?php echo $bidhistory['akata75'];?>"  min="11"  /></td>
                           <td><input type="Number" name="akata55" class="form-control" readonly  value="<?php echo $bidhistory['akata76'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata65" class="form-control" readonly  value="<?php echo $bidhistory['akata77'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata75" class="form-control" readonly  value="<?php echo $bidhistory['akata78'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata85" class="form-control" readonly  value="<?php echo $bidhistory['akata79'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata95" class="form-control" readonly  value="<?php echo $bidhistory['akata80'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>81</td>
                           <td>82</td>
                           <td>83</td>
                           <td>84</td>
                           <td>85</td>
                           <td>86</td>
                           <td>87</td>
                           <td>88</td>
                           <td>89</td>
                           <td>90</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata56" class="form-control" readonly  value="<?php echo $bidhistory['akata81'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata66" class="form-control" readonly  value="<?php echo $bidhistory['akata82'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata76" class="form-control" readonly  value="<?php echo $bidhistory['akata83'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata86" class="form-control" readonly  value="<?php echo $bidhistory['akata84'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata96" class="form-control" readonly  value="<?php echo $bidhistory['akata85'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata57" class="form-control" readonly  value="<?php echo $bidhistory['akata86'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata67" class="form-control" readonly  value="<?php echo $bidhistory['akata87'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata77" class="form-control" readonly  value="<?php echo $bidhistory['akata88'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata87" class="form-control" readonly  value="<?php echo $bidhistory['akata89'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata97" class="form-control" readonly  value="<?php echo $bidhistory['akata99'];?>"  min="11" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>91</td>
                           <td>92</td>
                           <td>93</td>
                           <td>94</td>
                           <td>95</td>
                           <td>96</td>
                           <td>97</td>
                           <td>98</td>
                           <td>99</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata58" class="form-control" readonly  value="<?php echo $bidhistory['akata91'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata68" class="form-control" readonly  value="<?php echo $bidhistory['akata92'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata78" class="form-control" readonly  value="<?php echo $bidhistory['akata93'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata88" class="form-control" readonly  value="<?php echo $bidhistory['akata94'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata98" class="form-control" readonly  value="<?php echo $bidhistory['akata95'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata59" class="form-control" readonly  value="<?php echo $bidhistory['akata96'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata69" class="form-control" readonly  value="<?php echo $bidhistory['akata97'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata79" class="form-control" readonly  value="<?php echo $bidhistory['akata98'];?>"  min="11" /></td>
                           <td><input type="Number" name="akata89" class="form-control" readonly  value="<?php echo $bidhistory['akata99'];?>"  min="11" /></td>
                           
                        </tr>
                     </table>
                </div>
            </div>
             
          
            
         
              <div class="row">
               
                <div class="col-md-12">&nbsp;</div>
               
              </div>
           </div>
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
<!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                   Ichapurti
                </div>
                <!-- Default to the left -->
                <strong>&copy; 2022 -Ichapurti</strong> All rights reserved
            </footer>
<!-- <p> © 2022 All Rights Reserved | Designed &amp; Developed by 
                    <a href="http://globaledu.net.in/" target="_blank">
                    <span> Global Education Limited </span>
                    </a>
                </p> -->
            </div>

            <!-- Required JS -->
            <script src="https://ichaapurti.com/panel/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

            <!-- Datatables Buttons -->
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

            <script src="assets/bower_components/pace/pace.min.js"></script>
            <script src="assets/dist/js/adminlte.min.js"></script>

            <!-- Textarea editor -->
            <script src="assets/bower_components/codemirror/lib/codemirror.min.js"></script>
            <script src="assets/bower_components/codemirror/mode/xml.min.js"></script>
            <script src="assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <!-- App JS -->
            <script src="assets/dist/js/app/dashboard.js"></script>


            </body>

            </html>
        </div>
    </body>
</html>
           