<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/usersys-min.png')}}" class="img-circle" alt="User Image">
            </div>
           
        </div>
        
        <ul class="sidebar-menu" data-widget="tree">
           
            <!-- Optionally, you can add icons to the links -->
             <li class="active"><a href="home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
             
             <li class="">
                <a href="{{ route('mattakaresults.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Results</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('jodicharts.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Jodi Charts</span>
                </a>
                
            </li>
             <li  class="treeview">
                <a href="" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bid History</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('singleakatas.index') }}">
                            <i class="fa fa-bars"></i> 
                            Single Akata
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('jodis.index') }}">
                            <i class="fa fa-bars"></i>
                             Jodi
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="{{ route('pattis.index') }}">
                            <i class="fa fa-bars"></i>
                            Patti
                        </a>
                    </li>
                </ul>
            </li>
             <li  class="treeview">
                <a href="" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Report Bid History</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('reportsingles.index') }}">
                            <i class="fa fa-bars"></i> 
                            Single Akata Reports
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('reportjodis.index') }}">
                            <i class="fa fa-bars"></i>
                             Jodi Reports
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="{{ route('reportpattis.index') }}">
                            <i class="fa fa-bars"></i>
                            Patti Reports
                        </a>
                    </li>
                </ul>
            </li>
              <li class="">
                <a href="{{ route('customers.index') }}" rel="noopener noreferrer">
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
                        <a href="{{ route('walletsbals.index') }}">
                            <i class="fa fa-bars"></i> 
                             Wallet Balance
                        </a>
                    </li>
                   
                 
                   
                    <li class="">
                        <a href="{{ route('fundrequests.index') }}">
                            <i class="fa fa-bars"></i>
                               Funds Request History
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="{{ route('transferpoints.index') }}">
                            <i class="fa fa-bars"></i>
                             Transfer Points
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="{{ route('banjaccounts.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bank Account</span>
                </a>
            </li>
           
            <li  class="treeview">
                <a href="{{ route('winhistorys.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Win History</span>
                </a>
               
            </li>
          
           
            <li class="">
                <a href="{{ route('notices.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Notice</span>
                </a>
            </li>
          
              <li class="">
                <a href="{{ route('onlinemattakas.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Online Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="{{ route('aboutmattakas.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>About Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="{{ route('categories.index') }}" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span> Manage Category  </span>
                </a>
            </li>
          
            <li class="">
                <a href="users" rel="noopener noreferrer">
                    <i class="fa fa-users"></i> <span> Change Password</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('logout') }}" rel="noopener noreferrer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                    <i class="fa fa-cogs"></i> {{ __('Logout') }} 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </a>
            </li>
            
                    </ul>

    </section>
    <!-- /.sidebar -->
</aside>  