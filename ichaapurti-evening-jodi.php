<?php 
session_start();
include "header.php";
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
            <h3 class="title">JODI</h3> 
               <section class="h-100 h-custom">
  
          <div class="card-body">
         
            <form  action="classess/jodi_code.php" method="post">

             <div class="row">
            
              <div class="col-md-12" style="padding: 20px;">
                <input type="hidden" name="category_name" value="ichaapurti_evening_jodi" class="form-control" />
                 <input type="hidden" name="customerId" value="<?php echo $_SESSION['tsoftId'];?>" />
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: left;"><h3>Enter Jodi Number</h3></td>
                     <td  style="text-align: right;">  <a href="ichaapurti-evening.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
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
                   <tr><td><input type="Number" name="akata00" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata10" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata20" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata30" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata40" class="form-control" min="11" /></td>
                  </tr>
                  
                  <tr style="color: black">
                    <td>01</td>
                    <td>11</td>
                    <td>21</td>
                    <td>31</td>
                    <td>41</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata01" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata11" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata21" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata31" class="form-control" min="11" /></td>
                     <td><input type="Number" name="akata41" class="form-control" min="11" /></td>
                  </tr>

                  <tr style="color: black">
                    <td>02</td>
                    <td>12</td>
                    <td>22</td>
                    <td>32</td>
                    <td>42</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata02" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata12" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata22" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata32" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata42" class="form-control" min="11" /></td>
                  
                  </tr>

                  <tr style="color: black">
                    <td>03</td>
                    <td>13</td>
                    <td>23</td>
                    <td>33</td>
                    <td>43</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata03" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata13" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata23" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata33" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata43" class="form-control" min="11" /></td>
                  </tr>
                   
                  <tr style="color: black">
                    <td>04</td>
                    <td>14</td>
                    <td>24</td>
                    <td>34</td>
                    <td>44</td>
                  </tr>
                   <tr><td><input type="Number" name="akata04" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata14" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata24" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata34" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata44" class="form-control" min="11" /></td>
                  </tr>
                  
                  <tr style="color: black">
                    <td>05</td>
                    <td>15</td>
                    <td>25</td>
                    <td>35</td>
                    <td>45</td>
                    
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata05" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata15" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata25" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata35" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata45" class="form-control" min="11" /></td>
                  </tr>
                   
                   <tr style="color: black">
                    <td>06</td>
                    <td>16</td>
                    <td>26</td>
                    <td>36</td>
                    <td>46</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata06" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata16" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata26" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata36" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata46" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>07</td>
                    <td>17</td>
                    <td>27</td>
                    <td>37</td>
                    <td>47</td>
                  </tr>
                  <tr>
                    <td><input type="Number" name="akata07" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata17" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata27" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata37" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata47" class="form-control" min="11" /></td>
                  </tr>
                  
                   <tr style="color: black">
                    <td>08</td>
                    <td>18</td>
                    <td>28</td>
                    <td>38</td>
                    <td>48</td>                  
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata08" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata18" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata28" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata38" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata48" class="form-control" min="11" /></td>
                  </tr>
                  
                   <tr style="color: black">
                    <td>09</td>
                    <td>19</td>
                    <td>29</td>
                    <td>39</td>
                    <td>49</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata09" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata19" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata29" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata39" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata49" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>50</td>
                    <td>60</td>
                    <td>70</td>
                    <td>80</td>
                    <td>90</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata50" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata60" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata70" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata80" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata90" class="form-control" min="11" /></td>
                  </tr>
                  <tr style="color: black">
                    <td>51</td>
                    <td>61</td>
                    <td>71</td>
                    <td>81</td>
                    <td>91</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata51" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata61" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata71" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata81" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata91" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>52</td>
                    <td>62</td>
                    <td>72</td>
                    <td>82</td>
                    <td>92</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata52" class="form-control" min="11" min="11" /></td>
                    <td><input type="Number" name="akata62" class="form-control" min="11" min="11" /></td>
                    <td><input type="Number" name="akata72" class="form-control" min="11" min="11" /></td>
                    <td><input type="Number" name="akata82" class="form-control" min="11" min="11" /></td>
                    <td><input type="Number" name="akata92" class="form-control" min="11" min="11" /></td>
                  </tr>
                  <tr style="color: black">
                    <td>53</td>
                    <td>63</td>
                    <td>73</td>
                    <td>83</td>
                    <td>93</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata53" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata63" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata73" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata83" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata93" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>54</td>
                    <td>64</td>
                    <td>74</td>
                    <td>84</td>
                    <td>94</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata54" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata64" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata74" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata84" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata94" class="form-control" min="11"  /></td>
                  </tr>
                   <tr style="color: black">
                   
                    <td>55</td>
                    <td>65</td>
                    <td>75</td>
                    <td>85</td>
                    <td>95</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata55" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata65" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata75" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata85" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata95" class="form-control" min="11" /></td>
                  </tr>
                    <tr style="color: black">
                    <td>56</td>
                    <td>66</td>
                    <td>76</td>
                    <td>86</td>
                    <td>96</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata56" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata66" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata76" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata86" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata96" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>57</td>
                    <td>67</td>
                    <td>77</td>
                    <td>87</td>
                    <td>97</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata57" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata67" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata77" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata87" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata97" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>58</td>
                    <td>68</td>
                    <td>78</td>
                    <td>88</td>
                    <td>98</td>
                  </tr>
                   <tr>
                    <td><input type="Number" name="akata58" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata68" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata78" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata88" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata98" class="form-control" min="11" /></td>
                  </tr>
                   <tr style="color: black">
                    <td>59</td>
                    <td>69</td>
                    <td>79</td>
                    <td>89</td>
                    <td>99</td>
                  </tr>

                   <tr>
                    <td><input type="Number" name="akata59" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata69" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata79" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata89" class="form-control" min="11" /></td>
                    <td><input type="Number" name="akata99" class="form-control" min="11" /></td>
                  </tr>
                </table>
              </div>
            </div>
            </div>
             
              <div class="row">
               
                <div class="col-md-6">
                  <input type="hidden" name="SingleData" value="SingleData"  />
                   <button type="submit" class="btn btn-success btn-lg mb-1">Proceed</button>
                </div>
              </div>
            </form>

    </div>
  </div>
</section> 

        </div>
    </div>    
</div>

</div>
