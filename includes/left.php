 <section class="sidebar">

       
        
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <!-- Optionally, you can add icons to the links -->
             <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            
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
                        <a href="{{ route('withdraws.index') }}">
                            <i class="fa fa-bars"></i>
                            Withdraw Funds
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('funds.index') }}">
                            <i class="fa fa-bars"></i>
                             Add Funds
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="{{ route('fundhistorys.index') }}">
                            <i class="fa fa-bars"></i>
                               Funds Request History
                        </a>
                    </li>
                    <li class="">
                        <a href="fundhistoryupis">
                            <i class="fa fa-bars"></i>
                              Funds Request History UPI
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
                <a href="" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Bid History</span>
                </a>
            </li>
            <li class="">
                <a href="" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Win History</span>
                </a>
            </li>
            <li class="">
                <a href="" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Bank Account</span>
                </a>
            </li>
            
                    </ul>

    </section>