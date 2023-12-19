@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   View Jodi Bid History
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Jodi Bid History   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">

    
   
    <div class="box-body" style="height:100%">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
    </div><br />
    @endif
         <div class="mt-2 mb-3" style="padding: 20px;">
         <div class="row  justify-content-start align-items-start">
            
            <div class="col-md-4 form-group">
                <label for="location">Customer Id</label>
                <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="category_name" value="{{ $jodis->customerId}}" required="required"> 
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Category Name</label>
                <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="category_name" value="{{ $jodis->category_name}}" required="required"> 
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Akata00</label>
              <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="akata01" value="{{ $jodis->akata01}}" required="required">       
            </div>
            
    
           </div>
       <table style="width:100%">
                        <tr style="color: black">
                          
                           <td colspan="10" style="text-align: right;">  <a href="{{ route('jodis.index') }}"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           
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
                           <td><input type="Number" name="akata00" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata01}}"  min="11" /></td>
                           <td><input type="Number" name="akata10" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata02}}"  min="11" /></td>
                           <td><input type="Number" name="akata20" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata03}}"  min="11" /></td>
                           <td><input type="Number" name="akata30" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata04}}"  min="11" /></td>
                           <td><input type="Number" name="akata40" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata05}}"  min="11" /></td>
                           <td><input type="Number" name="akata01" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata06}}"  min="11" /></td>
                           <td><input type="Number" name="akata11" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata07}}"  min="11" /></td>
                           <td><input type="Number" name="akata21" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata08}}"  min="11" /></td>
                           <td><input type="Number" name="akata31" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata09}}"  min="11" /></td>
                           <td><input type="Number" name="akata41" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata10}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata02" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata11}}"   min="11" /></td>
                           <td><input type="Number" name="akata12" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata12}}"   min="11" /></td>
                           <td><input type="Number" name="akata22" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata13}}"   min="11" /></td>
                           <td><input type="Number" name="akata32" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata14}}"   min="11" /></td>
                           <td><input type="Number" name="akata42" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata15}}"   min="11" /></td>
                           <td><input type="Number" name="akata03" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata16}}"   min="11" /></td>
                           <td><input type="Number" name="akata13" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata17}}"   min="11" /></td>
                           <td><input type="Number" name="akata23" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata18}}"   min="11" /></td>
                           <td><input type="Number" name="akata33" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata19}}"   min="11" /></td>
                           <td><input type="Number" name="akata43" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata20}}"   min="11" /></td>
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
                           <td><input type="Number" name="akata04" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata21}}"  min="11" /></td>
                           <td><input type="Number" name="akata14" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata22}}"  min="11" /></td>
                           <td><input type="Number" name="akata24" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata23}}"  min="11" /></td>
                           <td><input type="Number" name="akata34" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata24}}"  min="11" /></td>
                           <td><input type="Number" name="akata44" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata25}}"  min="11" /></td>
                           <td><input type="Number" name="akata05" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata26}}"  min="11" /></td>
                           <td><input type="Number" name="akata15" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata27}}"  min="11" /></td>
                           <td><input type="Number" name="akata25" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata28}}"  min="11" /></td>
                           <td><input type="Number" name="akata35" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata29}}"  min="11" /></td>
                           <td><input type="Number" name="akata45" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata30}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata06" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata31}}"  min="11" /></td>
                           <td><input type="Number" name="akata16" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata32}}"  min="11" /></td>
                           <td><input type="Number" name="akata26" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata33}}"  min="11" /></td>
                           <td><input type="Number" name="akata36" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata34}}"  min="11" /></td>
                           <td><input type="Number" name="akata46" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata35}}"  min="11" /></td>
                           <td><input type="Number" name="akata07" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata36}}"  min="11" /></td>
                           <td><input type="Number" name="akata17" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata37}}"  min="11" /></td>
                           <td><input type="Number" name="akata27" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata38}}"  min="11" /></td>
                           <td><input type="Number" name="akata37" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata39}}"  min="11" /></td>
                           <td><input type="Number" name="akata47" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata40}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata08" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata41}}"   min="11" /></td>
                           <td><input type="Number" name="akata18" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata42}}"   min="11" /></td>
                           <td><input type="Number" name="akata28" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata43}}"   min="11" /></td>
                           <td><input type="Number" name="akata38" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata44}}"   min="11" /></td>
                           <td><input type="Number" name="akata48" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata45}}"   min="11" /></td>
                           <td><input type="Number" name="akata09" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata46}}"   min="11" /></td>
                           <td><input type="Number" name="akata19" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata47}}"   min="11" /></td>
                           <td><input type="Number" name="akata29" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata48}}"   min="11" /></td>
                           <td><input type="Number" name="akata39" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata49}}"   min="11" /></td>
                           <td><input type="Number" name="akata49" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$jodis->akata50}}"   min="11" /></td>
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
                           <td><input type="Number" name="akata50" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata51}}"  min="11" /></td>
                           <td><input type="Number" name="akata60" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata52}}"  min="11" /></td>
                           <td><input type="Number" name="akata70" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata53}}"  min="11" /></td>
                           <td><input type="Number" name="akata80" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata54}}"  min="11" /></td>
                           <td><input type="Number" name="akata90" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata55}}"  min="11" /></td>
                           <td><input type="Number" name="akata51" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata56}}"  min="11" /></td>
                           <td><input type="Number" name="akata61" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata57}}"  min="11" /></td>
                           <td><input type="Number" name="akata71" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata58}}"  min="11" /></td>
                           <td><input type="Number" name="akata81" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata59}}"  min="11" /></td>
                           <td><input type="Number" name="akata91" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata60}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata52" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata61}}"  min="11"  /></td>
                           <td><input type="Number" name="akata62" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata62}}"  min="11" /></td>
                           <td><input type="Number" name="akata72" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata63}}"  min="11" /></td>
                           <td><input type="Number" name="akata82" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata64}}"  min="11" /></td>
                           <td><input type="Number" name="akata92" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata65}}"  min="11" /></td>
                           <td><input type="Number" name="akata53" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata66}}"  min="11" /></td>
                           <td><input type="Number" name="akata63" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata67}}"  min="11" /></td>
                           <td><input type="Number" name="akata73" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata68}}"  min="11" /></td>
                           <td><input type="Number" name="akata83" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata69}}"  min="11" /></td>
                           <td><input type="Number" name="akata93" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata70}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata54" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata71}}"  min="11" /></td>
                           <td><input type="Number" name="akata64" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata72}}"  min="11" /></td>
                           <td><input type="Number" name="akata74" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata73}}"  min="11" /></td>
                           <td><input type="Number" name="akata84" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata74}}"  min="11" /></td>
                           <td><input type="Number" name="akata94" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata75}}"  min="11"  /></td>
                           <td><input type="Number" name="akata55" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata76}}"  min="11" /></td>
                           <td><input type="Number" name="akata65" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata77}}"  min="11" /></td>
                           <td><input type="Number" name="akata75" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata78}}"  min="11" /></td>
                           <td><input type="Number" name="akata85" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata79}}"  min="11" /></td>
                           <td><input type="Number" name="akata95" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata80}}"  min="11" /></td>
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
                           <td><input type="Number" name="akata56" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata81}}"  min="11" /></td>
                           <td><input type="Number" name="akata66" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata82}}"  min="11" /></td>
                           <td><input type="Number" name="akata76" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata83}}"  min="11" /></td>
                           <td><input type="Number" name="akata86" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata84}}"  min="11" /></td>
                           <td><input type="Number" name="akata96" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata85}}"  min="11" /></td>
                           <td><input type="Number" name="akata57" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata86}}"  min="11" /></td>
                           <td><input type="Number" name="akata67" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata87}}"  min="11" /></td>
                           <td><input type="Number" name="akata77" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata88}}"  min="11" /></td>
                           <td><input type="Number" name="akata87" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata89}}"  min="11" /></td>
                           <td><input type="Number" name="akata97" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata90}}"  min="11" /></td>
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
                           <td>00</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata58" class="form-control blue" readonly  value="{{$jodis->akata91}}"  min="11" /></td>
                           <td><input type="Number" name="akata68" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata92}}"  min="11" /></td>
                           <td><input type="Number" name="akata78" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata93}}"  min="11" /></td>
                           <td><input type="Number" name="akata88" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata94}}"  min="11" /></td>
                           <td><input type="Number" name="akata98" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata95}}"  min="11" /></td>
                           <td><input type="Number" name="akata59" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata96}}"  min="11" /></td>
                           <td><input type="Number" name="akata69" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata97}}"  min="11" /></td>
                           <td><input type="Number" name="akata79" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata98}}"  min="11" /></td>
                           <td><input type="Number" name="akata89" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata99}}"  min="11" /></td>
                           <td><input type="Number" name="akata99" class="form-control text-green bold" style="font-weight: bold;" readonly  value="{{$jodis->akata100}}"  min="11" /></td>
                        </tr>
                     </table>
        
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           